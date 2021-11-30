
// Select all checkboxes with the name 'checkList' and put them in an array.
var checkboxes = document.querySelectorAll("input[type=checkbox][name=checkList]");
let checkedItem = []

//Array.forEach adds an event listener to each checkbox.
checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        checkedItem =
            //Converts checkboxes to an array to be able to filter and map.
            Array.from(checkboxes)
                //Array.filter removes unchecked checkboxes.
                .filter(i => i.checked)
                //Array.map extracts the checkbox values from the array of objects.
                .map(i => i.value)

        console.log(checkedItem)
    })
});

