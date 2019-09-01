const showAll = document.getElementById('show-users');
const users_list = document.querySelector('.users-list');

showAll.addEventListener('click', function () {
    if(users_list.childElementCount == 0){
        let xhr = new XMLHttpRequest;
        xhr.open('GET', 'data.php', true);
        xhr.send();
        xhr.addEventListener('load', function () {
            JSON.parse(xhr.response).map(function (el) {
                let li = document.createElement('li');
                li.innerText = el;
                users_list.appendChild(li);
            })
        })
    }
    
});