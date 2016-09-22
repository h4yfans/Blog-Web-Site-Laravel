/**
 * Created by Kaan on 9/20/2016.
 */
var addedCategoriesText;
var addedCategoriesIDs;

var docReady = setInterval(function () {
    if (document.readyState !== 'complete') {
        return;
    }
    clearInterval(docReady);

    var addCategoryBtn = document.getElementsByClassName('btn')[0];
    addedCategoriesIDs = document.getElementById('categories');
    addCategoryBtn.addEventListener('click', addCategoryToPost);
    addedCategoriesText = document.getElementsByClassName('added-categories')[0];

    for (var i = 0; i < addedCategoriesText.firstElementChild.children.length; i++) {
        addedCategoriesText.firstElementChild.children[i].firstElementChild.addEventListener('click', removeCategoryFromPost);
    }
}, 100);

function addCategoryToPost(event) {
    event.preventDefault();
    var select = document.getElementById('category_select');
    var selectedCategoryID = select.options[select.selectedIndex].value;
    console.log('selectedCategoryID ->' +  selectedCategoryID);
    var selectedCategoryName = select.options[select.selectedIndex].text;
    console.log('selectedCategoryName ->' +  selectedCategoryName);
    console.log(addedCategoriesIDs.value.split(",").indexOf(selectedCategoryID));
    if (addedCategoriesIDs.value.split(",").indexOf(selectedCategoryID) != -1) {
        return;
    }
    console.log(addedCategoriesIDs.value);
    if (addedCategoriesIDs.value.length > 0) {
        addedCategoriesIDs.value = addedCategoriesIDs.value + "," + selectedCategoryID;
    } else {
        addedCategoriesIDs.value = selectedCategoryID;
    }
    var newCategoryLi = document.createElement('li');
    var newCategoryLink = document.createElement('a');
    newCategoryLink.href = '#';
    newCategoryLink.innerText = selectedCategoryName;
    console.log(newCategoryLink);
    newCategoryLink.dataset['category_id'] = selectedCategoryID;
    newCategoryLink.addEventListener('click', removeCategoryFromPost);
    newCategoryLi.appendChild(newCategoryLink);
    addedCategoriesText.firstElementChild.appendChild(newCategoryLi);
}

function removeCategoryFromPost(event) {
    event.preventDefault();
    event.target.removeEventListener('click', removeCategoryFromPost);
    var categoryID = event.target.dataset['category_id'];
    var categoryIDArray = addedCategoriesIDs.value.split(",");
    var index = categoryIDArray.indexOf(categoryID);
    categoryIDArray.splice(index, 1);
    var newCategoriesIDs = categoryIDArray.join(',');
    addedCategoriesIDs.value = newCategoriesIDs;
    event.target.parentElement.remove();
}