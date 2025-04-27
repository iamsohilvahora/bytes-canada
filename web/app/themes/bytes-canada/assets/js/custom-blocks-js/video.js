// video load after fullpage load JS
jQuery(function () {
    jQuery("video.connect-bg source").each(function () {
        var sourceFile = jQuery(this).attr("data-src");
        jQuery(this).attr("src", sourceFile);
        var video = this.parentElement;
        video.load();
    });
});
// video Play fullscreen JS
const play = document.getElementsByClassName('vid__play')[0];
const video = document.getElementsByTagName('video')[0];
play.addEventListener('click', () => {
    video.classList.add('vid__video--show')
    if (video.requestFullscreen) {
        video.requestFullscreen();
    } else if (video.mozRequestFullScreen) {
        video.mozRequestFullScreen();
    } else if (video.webkitRequestFullscreen) {
        video.webkitRequestFullscreen();
    }
    video.play();
})
// video Pause on exitfullscreen JS
jQuery(document).bind('webkitfullscreenchange mozfullscreenchange fullscreenchange', function(e) {
    var state = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
    var event = state ? 'FullscreenOn' : 'FullscreenOff';
   if(event === 'FullscreenOff') {
    video.pause();
   }
});