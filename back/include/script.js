// Preloader
setTimeout(function () {
  $(".loader_bg").fadeToggle();
}, 1000);

// Select all toggle switches and switch labels
const toggleSwitches = document.querySelectorAll(".toggle-switch");
const switchLabels = document.querySelectorAll(".switch-label");
const timeInputs = document.querySelectorAll("input[type='time']");

// Iterate through each toggle switch
toggleSwitches.forEach((switchInput, index) => {
  // Add a change event listener to each switch
  switchInput.addEventListener("change", function () {
    // Update the label text based on the checkbox's checked state
    switchLabels[index].textContent = this.checked ? "Open" : "Closed";

    // Enable or disable time inputs based on the checkbox's checked state
    timeInputs[index * 2].disabled = !this.checked; // Start time input
    timeInputs[index * 2 + 1].disabled = !this.checked; // End time input
  });
});

// Script for add tags
function addTag() {
  const tagInput = document.getElementById("tagInput");
  const tagContainer = document.getElementById("tagContainer");

  const tagText = tagInput.value.trim();
  if (tagText !== "") {
    const tagElement = document.createElement("span");
    tagElement.className = "badge badge-light mr-2";
    tagElement.textContent = tagText;

    const closeButton = document.createElement("i");
    closeButton.className = "ml-1 fa fa-times-circle";
    // closeButton.innerHTML = "&times;";
    closeButton.onclick = function () {
      tagContainer.removeChild(tagElement);
    };

    tagElement.appendChild(closeButton);
    tagContainer.appendChild(tagElement);
    tagInput.value = "";
  }
}

// Script for select file using upload button container 1
$(document).ready(function () {
  $("#uploadButton").click(function () {
    $("#fileInput").click();
  });
});

const fileInput = document.getElementById("fileInput");
const selectedImage = document.getElementById("selectedImage");
const deleteButton = document.getElementById("deleteButton");

fileInput.addEventListener("change", function (event) {
  const selectedFile = event.target.files[0];

  if (selectedFile) {
    const imageURL = URL.createObjectURL(selectedFile);
    console.log(imageURL);
    selectedImage.src = imageURL;
  }
});
deleteButton.addEventListener("click", function () {
  const placeholderImageURL = "./assets/img/image.png"; // Set the path to your placeholder image
  selectedImage.src = placeholderImageURL; // Display a placeholder image when the delete button is clicked
});

// Script for select file using upload button container 1
$(document).ready(function () {
  $("#uploadButton1").click(function () {
    $("#fileInput1").click();
  });
});

const fileInput1 = document.getElementById("fileInput1");
const selectedImage1 = document.getElementById("selectedImage1");
const deleteButton1 = document.getElementById("deleteButton1");

fileInput1.addEventListener("change", function (event) {
  const selectedFile = event.target.files[0];

  if (selectedFile) {
    const imageURL = URL.createObjectURL(selectedFile);
    selectedImage1.src = imageURL;
  }
});
deleteButton1.addEventListener("click", function () {
  const placeholderImageURL = "./assets/img/image.png"; // Set the path to your placeholder image
  selectedImage1.src = placeholderImageURL; // Display a placeholder image when the delete button is clicked
});

// Script for delete social media values
function clearFacebookInput() {
  const facebookInput = document.getElementById("facebookInput");
  facebookInput.value = "Not Set"; // Clear the value of the input
}

function clearInstagramInput() {
  const instagramInput = document.getElementById("instagramInput");
  instagramInput.value = "Not Set"; // Clear the value of the input
}

function clearLinkedinInput() {
  const linkedinInput = document.getElementById("linkedinInput");
  linkedinInput.value = "Not Set"; // Clear the value of the input
}

function clearSkypeInput() {
  const skypeInput = document.getElementById("skypeInput");
  skypeInput.value = "Not Set"; // Clear the value of the input
}

function clearTwitterInput() {
  const twitterInput = document.getElementById("twitterInput");
  twitterInput.value = "Not Set"; // Clear the value of the input
}

function clearPinterestInput() {
  const pinterestInput = document.getElementById("pinterestInput");
  pinterestInput.value = "Not Set"; // Clear the value of the input
}
