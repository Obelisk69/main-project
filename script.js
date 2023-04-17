const formInsert = document.getElementById("form-insert-student");
const msg = document.querySelector(".message");
const content =document.querySelector(".content");


formInsert.addEventListener("submit", (event)=>{
    event.preventDefault();//Отменяем стандартную отправку формы
    let formData = new FormData(formInsert);//Собираем данные с формы, которые  ввёл пользователь

    let xhr = new XMLHttpRequest();//Создаём объект отправки запроса на сервер
    xhr.open("POST", "insetStudent.php");//открываем соединения
    xhr.send(formData);//Отправка данные на сервер
    xhr.onload = () => {
        if(xhr.response == "OK"){
            msg.innerHTML = "Студент добавлен";
            msg.classList.add("sucess");
            msg.classList.add("show-message");
            let div = document.createElement("div");
            let fname =formData.get("fname");
            let lname =formData.get("lname");
            let gender =formData.get("gender");
            let age =formData.get("age");
            div.innerHTML = `${lname}, ${fname}, ${gender}, ${age}`;
            content.append(div);
        }
        else{
            msg.innerHTML = "Ошибка";
            msg.classList.add("reject");
            msg.classList.add("show-message");
        }
    }
});