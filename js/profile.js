// PROFILE EDIT
const editStart = () => {
  // Hide present values
  $("#gender-status").css("display", "none");
  $("#emp-status").css("display", "none");
  // Show inputs
  $("#country").attr("readonly", false);
  $("#city").attr("readonly", false);
  $("#dob").attr("readonly", false);
  $("#gender").attr("hidden", false);
  $("#employment").attr("hidden", false);
  $("#save-edit").css("display", "block");
  $("#cancel-edit").css("display", "block");
};

const editEnd = (e) => {
  e.preventDefault();
  // Hide present values
  $("#gender-status").css("display", "inline-block");
  $("#emp-status").css("display", "inline-block");
  // Show inputs
  $("#country").attr("readonly", true);
  $("#city").attr("readonly", true);
  $("#dob").attr("readonly", true);
  $("#gender").attr("hidden", true);
  $("#employment").attr("hidden", true);
  $("#save-edit").css("display", "none");
  $("#cancel-edit").css("display", "none");
};

const editSave = (e) => {
  e.preventDefault();
  // CAN CALL EDIT END TO SET THE DISPLAY BACK TO VIEW MDOE AFTER EDITING DATA OR CAN DO IT MANUALLY
  alert("Saving Data");
  editEnd(e);
};

// WORK EDIT 
const newSkills = [];

const workEditStart = (e) => {
  e.preventDefault();
  $("#skill-edit-1").attr("readonly", false);
  $("#skill-edit-2").attr("readonly", false);
  $("#skill-edit-3").attr("readonly", false);
  $("#skill-edit-4").attr("readonly", false);
  $("#skill-edit-5").attr("readonly", false);
  $("#save-edit-skill").css("display", "block");
  $("#cancel-edit-skill").css("display", "inline-block");
  $("#save-edit-skill").css("display", "inline-block");
  $("#add-skill-container").css("display", "flex");
};

const addSkill = (e) => {
  e.preventDefault();
  let val = $("#new-skill").val();
  if (val.length == 0) {
    alert("Enter a Skill");
    return;
  } else {
    newSkills.push(val);
    $("#new-skill").val("");
    $("#skills-list").html((i, old) => {
      return (
        old +
        `<li class="text-white my-1" id="skill-${
          document.querySelectorAll("#skills-list > li").length + 1
        }" >
      <input type="text" id="skill-edit-${
        document.querySelectorAll("#skills-list > li").length + 1
      }" class="form-control skills-input"
          value=${val} readonly /></li>`
      );
    });
  }
};

const workEditCancel = (e) => {
  e.preventDefault();
  $("#skill-edit-1").attr("readonly", true);
  $("#skill-edit-2").attr("readonly", true);
  $("#skill-edit-3").attr("readonly", true);
  $("#skill-edit-4").attr("readonly", true);
  $("#skill-edit-5").attr("readonly", true);
  $("#save-edit-skill").css("display", "none");
  $("#cancel-edit-skill").css("display", "none");
  $("#save-edit-skill").css("display", "none");
  $("#add-skill-container").css("display", "none");
  // Remove Added Skills
  const length = document.querySelectorAll("#skills-list > li").length;
  for (let i = 0; i < newSkills.length; i++) {
    $(`#skills-list #skill-${length - i}`).remove();
  }
  $("#new-skill").val("");
};

const workEditSave = e => {
  e.preventDefault();
  alert('Saving Work Links');
}

// CONNECT EDIT 

const connectEditStart = (e) => {
  e.preventDefault();
  $("#website-link").attr("hidden", false);
  $("#project-link").attr("hidden", false);
  $("#github-link").attr("hidden", false);
  $("#linkedin-link").attr("hidden", false);
  $("#fb-link").attr("hidden", false);
  $('#save-edit-connect').css('display', 'inline-block');
  $('#cancel-edit-connect').css('display', 'inline-block');
}

const connectEditCancel = (e) => {
  e.preventDefault();
  $("#website-link").attr("hidden", true);
  $("#project-link").attr("hidden", true);
  $("#github-link").attr("hidden", true);
  $("#linkedin-link").attr("hidden", true);
  $("#fb-link").attr("hidden", true);
  $('#save-edit-connect').css('display', 'none');
  $('#cancel-edit-connect').css('display', 'none');
}

const connectEditSave = e => {
  e.preventDefault();
  alert('Saving Connect');
  connectEditCancel(e);
}

// PROFILE EDIT TRIGGERS
$("#edit-profile").click(editStart);
$("#cancel-edit").click(editEnd);
$("#save-edit").click(editSave);
// WORK EDIT TRIGGERS
$("#skills-edit").click(workEditStart);
$("#cancel-edit-skill").click(workEditCancel);
$('#save-edit-skill').click(workEditSave);
$("#add-skill").click(addSkill);
// CONNECT EDIT TRIGGERS
$('#connect-edit').click(connectEditStart);
$("#cancel-edit-connect").click(connectEditCancel);
$("#save-edit-connect").click(connectEditSave);


