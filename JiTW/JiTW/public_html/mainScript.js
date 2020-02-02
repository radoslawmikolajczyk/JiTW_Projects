xmlhttp = undefined;

function onNewEntryLoad() {
   var dateFromForm = document.getElementsByName("date")[0];
   var timeFromForm = document.getElementsByName("hour")[0];
   dateFromForm.value = setDateFormat();
   timeFromForm.value = setTimeFormat();
}

function setDateFormat() {
   let cd = new Date();
   return (
      cd.getFullYear() + "-" +
      (cd.getMonth() > 8 ? cd.getMonth() + 1 : "0" + (cd.getMonth() + 1)) + "-" +
      (cd.getDate() > 9 ? cd.getDate() : "0" + cd.getDate())
   );
}

function setTimeFormat() {
   let cd = new Date();
   return (
      (cd.getHours() > 9 ? cd.getHours() : "0" + cd.getHours()) + ":" +
      (cd.getMinutes() > 9 ? cd.getMinutes() : "0" + cd.getMinutes())
   );
}

function createNewFileUploadButton(inputElement) {
  if (inputElement.value) {
    let nextAttID = parseInt(inputElement.name[inputElement.name.length - 1]) + 1;
    let actionButtonsID = document.getElementById("action_buttons");

    // max 10 zalacznikow.
    if (nextAttID == 10) return;

    let div = document.getElementById("newEntryForm");
    var nextInputControl = document.createElement("input");
    nextInputControl.setAttribute("id", "file-upload");
    nextInputControl.setAttribute("type", "file");
    nextInputControl.onchange = () => {
      createNewFileUploadButton(nextInputControl);
    };
    nextInputControl.name = "attachment" + nextAttID;
    div.insertBefore(nextInputControl, actionButtonsID);

    // bez tego nowy przycisk przegladaj bedzie sie pojawual w randomowych miejscach
    div.insertBefore(document.createElement("br"), actionButtonsID);
  }
}

function validateInputDate(dateInput) {
  var date = dateInput.value.split("-");

  if (date.length != 3 || date[1] < 1 || date[1] > 12 || date[2] < 1 || date[2] > 31) {
     dateInput.value = setDateFormat();
  }

  var pattern = /^[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]$/;
  if(pattern.test(dateInput.value) != true){
	dateInput.value = setDateFormat();
  }

  var currentDate = new Date();
  var year = currentDate.getFullYear().toString();
  var month = (currentDate.getMonth() + 1).toString();
  var day = currentDate.getDate().toString();

  if (month.length == 1)
        month = "0" + month;
  if (day.length == 1)
        day = "0" + day;

  var date2 = document.getElementsByName('date')[0].value.split('-');
  if(date2[0] > year || ( date2[0] == year && date2[1] > month ) || (date2[0] == year && date2[1] == month && date2[2] > day)){
  	dateInput.value = setDateFormat();
  }
}

function validateInputTime(timeInput) {
  var time = timeInput.value.split(":");

  if (time.length != 2 || time[1] < 0 || time[1] > 59 || time[0] < 0 || time[0] > 23) {
     timeInput.value = setTimeFormat();
  }

  var pattern = /^[0-9][0-9]:[0-9][0-9]$/;
  if(pattern.test(timeInput.value) != true){
  	timeInput.value = setTimeFormat();
  }

  var currentDate = new Date();
  var year = currentDate.getFullYear().toString();
  var month = (currentDate.getMonth() + 1).toString();
  var day = currentDate.getDate().toString()
  var hours = currentDate.getHours().toString();
  var minutes = currentDate.getMinutes().toString();
  if (month.length == 1)
      month = "0" + month;
  if (day.length == 1)
      day = "0" + day;
  if (hours.length == 1)
      hours = "0" + hours;
  if (minutes.length == 1)
      minutes = "0" + minutes;

  var date2 = document.getElementsByName('date')[0].value.split('-');
  var time2 = document.getElementsByName('hour')[0].value.split(':');

  if( ((date2[0] == year) && (date2[1] == month) && (date2[2] == day)) && ( (time2[0] > hours) || ( ( time2[0] == hours ) && ( time2[1] > minutes ))) )
      timeInput.value = setTimeFormat();
}

function onLoad() {
   generateBlogStyles();
   loadStyles();

   // domyslnie wylaczony jest komunikator box
   document.getElementById("communicatorActivator").checked = false;
   // temu ze jest wylaczony nie musimy czyscic tekstu
   document.getElementById("messagesContainer").value = "";
}

function generateBlogStyles() {
   var ul = document.getElementById("styles_list");
   for (let style of document.styleSheets) {
      var li = document.createElement("li");
      li.innerHTML = style.title;
      li.onclick = changeStyle;
      ul.appendChild(li);
   }
}

function loadStyles() {
   if (!document.cookie) {
      return;
   } else {
      split = document.cookie.split("; ");

      for (let s of split) {
         if (s.includes("style=")) {
            selectedStyle = s.split("=")[1];
            document.selectedStyleSheetSet = selectedStyle;
            return;
         }
      }
   }
}

function changeStyle() {
  document.selectedStyleSheetSet = this.innerHTML;
  document.cookie = "style=" + this.innerHTML;
}

function activate(checkbox) {
   if (checkbox.checked) {
      document.getElementById("sendMessageButton").style.display = "block";
      setupMessenger();
   } else {
      document.getElementById("sendMessageButton").style.display = "none";

      if (xmlhttp !== undefined) {
         xmlhttp.abort();
      }
   }
}

function setupMessenger() {
   xmlhttp = new XMLHttpRequest();

   xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4) {
         document.getElementById("messagesContainer").value = xmlhttp.responseText;
         xmlhttp.open("GET", "getMessages.php?update=1", true);
         xmlhttp.send(null);
      }
   };

   xmlhttp.open("GET", "getMessages.php?", true);
   xmlhttp.send();
}

function sendMessage() {
  let name = document.getElementById("communicatorName");
  let msg = document.getElementById("communicatorMessage");
  let text = name.value + ": " + msg.value;

  name.value = "";
  msg.value = "";

  req = new XMLHttpRequest();
  req.onreadystatechange = () => {};
  req.open("GET", "sendMessage.php?text=" + text, true);
  req.send();
}
