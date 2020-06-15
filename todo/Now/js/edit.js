$(".editbtn").click(e =>{
  console.log("Icon clicked");
  let textvalue = displayData(e);

  console.log(textvalue);
  let id = $("input[name*=update_id]");
  let todo = $("input[name*=todo]");
  let due_date = $("input[name*=due_date]");
  id.val(textvalue[0]);
  todo.val(textvalue[2]);
  due_date.val(textvalue[3]);
});



function displayData(e) {
  let id = 0;
  let td = $(".table-borderless tr td ");
  textvalue = [];
  for (const value of td) {
    if (value.dataset.id == e.target.dataset.id) {
      textvalue[id++] = value.textContent;
    }
  }
 return textvalue;
}
