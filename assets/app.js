$(document).ready(function() {

});

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    document.getElementById("username").classList.toggle("active");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

onKeyPressTextMessage = function(){
      var textArea = event.currentTarget;
      textArea.style.height = 'auto';
      textArea.style.height = textArea.scrollHeight + 5 + 'px';
};

function VoteCheck() {
  var id = $(".vote").attr("id");

  $.ajax({
    url: '/QuoraClone/check/' + id,
    success: function(data) {
      $("#" + id).html(data);
    }
  })
}

function Vote(id) {
  $.ajax({
    url: '/QuoraClone/vote/' + id,
    success: function(data) {
      $("#" + id).html(data);
    }
  })
}

var app = angular.module("QuoraClone", []);

app.controller("MainLayout", function($scope) {
  $scope.AppName = "QuoraClone";
});
