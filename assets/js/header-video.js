var headerVideo = document.getElementById('headerVideo');
var videoContainer = document.getElementById('videoContainer');

headerVideo.addEventListener('click', () => {
  var videoUrl = videoContainer.getAttribute('data-video');
  var videoIframe = document.createElement('iframe');
  videoIframe.src = videoUrl;
  videoIframe.setAttribute('width', headerVideo.clientWidth);
  videoIframe.setAttribute('height', headerVideo.clientHeight);
  videoContainer.removeChild(headerVideo);
  videoContainer.appendChild(videoIframe);

});