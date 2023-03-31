var buttons = document.querySelectorAll(".view_user");
buttons.forEach(button => {
    button.addEventListener("click", event => {
        console.log(button.textContent)
      if(button.textContent == "Mentor"){
        document.cookie = "js_var = " + "2";
        window.location.reload(); 
      }else if(button.textContent == "Mentee"){
        document.cookie = "js_var = " + "3";
        window.location.reload(); 
      }else if(button.textContent == "Admin"){
        document.cookie = "js_var = " + "1";
        window.location.reload(); 
      }
    });
  });

