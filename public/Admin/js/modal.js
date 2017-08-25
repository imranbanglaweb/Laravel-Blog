$(".modal").each(function(l){$(this).on("show.bs.modal",function(l){var o=$(this).attr("data-easein");"shake"==o?$(".modal-dialog").velocity("callout."+o):"pulse"==o?$(".modal-dialog").velocity("callout."+o):"tada"==o?$(".modal-dialog").velocity("callout."+o):"flash"==o?$(".modal-dialog").velocity("callout."+o):"bounce"==o?$(".modal-dialog").velocity("callout."+o):"swing"==o?$(".modal-dialog").velocity("callout."+o):$(".modal-dialog").velocity("transition."+o)})});

// add the animation to the modal
$(".modal").each(function(index) {
  $(this).on('show.bs.modal', function(e) {
    var open = $(this).attr('data-easein');
    if (open == 'shake') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'pulse') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'tada') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'flash') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'bounce') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'swing') {
      $('.modal-dialog').velocity('callout.' + open);
    } else {
      $('.modal-dialog').velocity('transition.' + open);
    }

  });
});