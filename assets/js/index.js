$(function () {
  requestToPHP('getAllEmployees').done(data => {
    console.log(data);
    $('.header').after("<section id='jsGrid'></section>");
    $('#jsGrid').jsGrid({
      width: '100%',
      height: '800px',
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,

      data: data,

      fields: [
        { name: 'id', type: 'number', width: 50, validate: 'required' },
        { name: 'name', type: 'text', width: 150, validate: 'required' },
        { name: 'lastName', type: 'text', validate: 'required' },
        { name: 'email', type: 'text', width: 200, validate: 'required' },
        { name: 'gender', type: 'text', width: 60, validate: 'required' },
        { name: 'age', type: 'number', width: 50, validate: 'required' },
        {
          name: 'streetAddress',
          type: 'text',
          width: 200,
          validate: 'required',
        },
        { name: 'city', type: 'text', width: 200, validate: 'required' },
        { name: 'state', type: 'text', width: 50, validate: 'required' },
        { name: 'postalCode', type: 'number', width: 70, validate: 'required' },
        {
          name: 'phoneNumber',
          type: 'number',
          width: 100,
          validate: 'required',
        },
      ],
    });
  });
});

const requestToPHP = (action, method = 'GET', data = '') => {
  request = {
    url: './library/employeeController.php',
    data: { action: action, data: data },
    type: method,
  };
  return $.ajax(request);
};
