$(function () {
  requestToPHP('GET', 'getAllEmployees').done(data => {
    console.log(data);
    $('.header').after("<section id='jsGrid'></section>");
    $('#jsGrid').jsGrid({
      width: '100%',
      height: '800px',
      inserting: true,
      sorting: true,
      paging: true,
      datatype: 'json',
      editing: true,

      onItemDeleting: args => requestToPHP('DELETE', { data: args.item.id }),
      onItemInserting: args =>
        requestToPHP('POST', args.item).done(resp => {
          args.item.id = resp;
          args.item.lastName = '';
          args.item.gender = '';
        }),
      onItemUpdating: args =>
        requestToPHP('updateEmployee', 'PATCH', args.item),

      deleteConfirm: 'Do you really want to delete the client?',
      data: data,

      rowClick: function (args) {
        window.location.href = `employee.php?id=${args.item.id}`;
      },

      fields: [
        {
          name: 'name',
          type: 'text',
          width: 150,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'email',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'age',
          type: 'number',
          width: 50,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'streetAddress',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'city',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'state',
          type: 'text',
          width: 50,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'postalCode',
          type: 'number',
          width: 70,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'phoneNumber',
          type: 'number',
          width: 100,
          validate: 'required',
          align: 'center',
        },
        { type: 'control' },
      ],
    });
  });
});

const requestToPHP = (method = 'GET', data = '') => {
  request = {
    url: './library/employeeController.php',
    data: data,
    type: method,
  };
  return $.ajax(request);
};
