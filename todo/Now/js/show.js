$(".readbtn").click(e =>{
  console.log("Icon clicked");
  let textvalue = displayData(e);

  console.log(textvalue);
  let id = $("input[name*=show_id]");
  let todo = $("input[name*=read_todo]");
  let due_date = $("input[name*=read_due_date]");
  let created = $("input[name*=read_created]");
  let updated = $("input[name*=read_updated]");
  let done = $("input[name*=read_done]");
  id.val(textvalue[1]);
  todo.val(textvalue[2]);
  due_date.val(textvalue[3]);
  created.val(textvalue[4]);
  updated.val(textvalue[5]);
  done.val(textvalue[6]);
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
