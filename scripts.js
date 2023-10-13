// function fill(Value) {
//     //Assigning value to "search" div in "search.php" file.
//     $('#search').val(Value);
//     //Hiding "display" div in "search.php" file.
//     $('#display').hide();
//  }

let first = document.getElementById('first');
let right = document.querySelector('.right');
let addIcon = document.querySelector('.addIcon');
let addSection = document.querySelector('.add');

addIcon.addEventListener('click', function(){
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'add.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function(){
        if(xhr.readyState  === 4 && xhr.status == 200){
            addSection.innerHTML = xhr.responseText;
            addSection.style.display = "block";

            let closex   = document.querySelector('.close');
            closex.addEventListener('click', function(){
                addSection.style.display = 'none';
                console.log('Hallo ');
            }); 
        }
    };

    xhr.send('first=');

});


// first button
first.addEventListener('click', function(){
    let value = "Sarbast";
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'first.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function(){
        if(xhr.readyState  === 4 && xhr.status == 200){
            right.innerHTML = xhr.responseText;
        }
    };

    xhr.send('first='+value);

});

/// ajax for live search

document.addEventListener('DOMContentLoaded', function() {
    var searchInput = document.getElementById('search-input');
    var displayDiv  = document.getElementById('live-search-result');
    var rect = searchInput.getBoundingClientRect();

    console.log(rect.left + ",  "+rect.top );
    displayDiv.style.left = rect.left;
    displayDiv.style.top =rect.top + searchInput.offsetHeight ;
    displayDiv.style.width = searchInput.offsetWidth;

    searchInput.addEventListener('input', function() {
        var value = searchInput.value;

        if (value === ""){
            displayDiv.innerHTML = "";
        }
        else {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'live-search.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status == 200) {
                    displayDiv.innerHTML = xhr.responseText;
                }
            };

            xhr.send('live-search=' + value);

        }
    });

});



