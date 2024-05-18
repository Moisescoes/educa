window.onload = function () {
  centerVideoContainer();
};

window.onresize = function () {
  centerVideoContainer();
};

function centerVideoContainer() {
  var videoContainer = document.getElementById("video-container");
  var windowHeight = window.innerHeight;
  var videoContainerHeight = videoContainer.offsetHeight;
  var marginTop = (windowHeight - videoContainerHeight) / 2;
  videoContainer.style.marginTop = marginTop + "px";
}
