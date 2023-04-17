const forminsert = document.getElementById("form-insert-student");
forminsert.addEventListener("submit", (event)=>{
    event.preventDefault();//Отменяем стандартную отправку формы
    let formData = new formData(forminsert);//Собираем данные с формы, которые  ввёл пользователь

    let xhr = new XMLHttpRequest();//Создаём объект отправки запроса на сервер
    xhr.open("POST", "insetStudent.php");//открываем соединения
    xhr.send(formData);//Отправка данные на сервер
    xhr.onload = () => {console.log(xhr.response)};
    
});