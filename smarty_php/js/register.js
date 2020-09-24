$(function() {

    console.log(/^([A-Za-z0-9]{5,})$/.test('A Aabc1')); // false

    console.log(/^([A-Za-z0-9]{5,})$/.test('ab!c12')); // true
    
    console.log(/^([A-Za-z0-9]{5,})$/.test('abc!123')); // true

});


