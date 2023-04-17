(function() {
   var carousel, next, prev, seats;
 
   carousel = $('.carousel');
 
   seats = $('.carousel-seat');
 
   next = function(el) {
     if (el.next().length > 0) {
       return el.next();
     } else {
       return seats.first();
     }
   };
 
   prev = function(el) {
     if (el.prev().length > 0) {
       return el.prev();
     } else {
       return seats.last();
     }
   };
 
   $('.toggle').on('click', function(e) {
     var el, i, j, new_seat, ref;
     el = $('.is-ref').removeClass('is-ref');
     if ($(e.currentTarget).data('toggle') === 'next') {
       new_seat = next(el);
       carousel.removeClass('is-reversing');
     } else {
       new_seat = prev(el);
       carousel.addClass('is-reversing');
     }
     new_seat.addClass('is-ref').css('order', 1);
     for (i = j = 2, ref = seats.length; (2 <= ref ? j <= ref : j >= ref); i = 2 <= ref ? ++j : --j) {
       new_seat = next(new_seat).css('order', i);
     }
     carousel.removeClass('is-set');
     return setTimeout((function() {
       return carousel.addClass('is-set');
     }), 50);
   });
 
 }).call(this);
 
 //# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQSxNQUFBLFFBQUEsRUFBQSxJQUFBLEVBQUEsSUFBQSxFQUFBOztFQUFBLFFBQUEsR0FBVyxDQUFBLENBQUUsV0FBRjs7RUFDWCxLQUFBLEdBQVEsQ0FBQSxDQUFFLGdCQUFGOztFQUVSLElBQUEsR0FBTyxRQUFBLENBQUMsRUFBRCxDQUFBO0lBQVEsSUFBRyxFQUFFLENBQUMsSUFBSCxDQUFBLENBQVMsQ0FBQyxNQUFWLEdBQW1CLENBQXRCO2FBQTZCLEVBQUUsQ0FBQyxJQUFILENBQUEsRUFBN0I7S0FBQSxNQUFBO2FBQTRDLEtBQUssQ0FBQyxLQUFOLENBQUEsRUFBNUM7O0VBQVI7O0VBQ1AsSUFBQSxHQUFPLFFBQUEsQ0FBQyxFQUFELENBQUE7SUFBUSxJQUFHLEVBQUUsQ0FBQyxJQUFILENBQUEsQ0FBUyxDQUFDLE1BQVYsR0FBbUIsQ0FBdEI7YUFBNkIsRUFBRSxDQUFDLElBQUgsQ0FBQSxFQUE3QjtLQUFBLE1BQUE7YUFBNEMsS0FBSyxDQUFDLElBQU4sQ0FBQSxFQUE1Qzs7RUFBUjs7RUFFUCxDQUFBLENBQUUsU0FBRixDQUFZLENBQUMsRUFBYixDQUFnQixPQUFoQixFQUF5QixRQUFBLENBQUMsQ0FBRCxDQUFBO0FBQ3pCLFFBQUEsRUFBQSxFQUFBLENBQUEsRUFBQSxDQUFBLEVBQUEsUUFBQSxFQUFBO0lBQUUsRUFBQSxHQUFLLENBQUEsQ0FBRSxTQUFGLENBQVksQ0FBQyxXQUFiLENBQXlCLFFBQXpCO0lBRUwsSUFBRyxDQUFBLENBQUUsQ0FBQyxDQUFDLGFBQUosQ0FBa0IsQ0FBQyxJQUFuQixDQUF3QixRQUF4QixDQUFBLEtBQXFDLE1BQXhDO01BQ0UsUUFBQSxHQUFXLElBQUEsQ0FBSyxFQUFMO01BQ1gsUUFBUSxDQUFDLFdBQVQsQ0FBcUIsY0FBckIsRUFGRjtLQUFBLE1BQUE7TUFJRSxRQUFBLEdBQVcsSUFBQSxDQUFLLEVBQUw7TUFDWCxRQUFRLENBQUMsUUFBVCxDQUFrQixjQUFsQixFQUxGOztJQU9BLFFBQVEsQ0FBQyxRQUFULENBQWtCLFFBQWxCLENBQTJCLENBQUMsR0FBNUIsQ0FBZ0MsT0FBaEMsRUFBeUMsQ0FBekM7SUFDQSxLQUFtRCx5RkFBbkQ7TUFBQSxRQUFBLEdBQVcsSUFBQSxDQUFLLFFBQUwsQ0FBYyxDQUFDLEdBQWYsQ0FBbUIsT0FBbkIsRUFBNEIsQ0FBNUI7SUFBWDtJQUVBLFFBQVEsQ0FBQyxXQUFULENBQXFCLFFBQXJCO1dBQ0EsVUFBQSxDQUFXLENBQUMsUUFBQSxDQUFBLENBQUE7YUFBRyxRQUFRLENBQUMsUUFBVCxDQUFrQixRQUFsQjtJQUFILENBQUQsQ0FBWCxFQUE2QyxFQUE3QztFQWR1QixDQUF6QjtBQU5BIiwic291cmNlc0NvbnRlbnQiOlsiY2Fyb3VzZWwgPSAkKCcuY2Fyb3VzZWwnKVxuc2VhdHMgPSAkKCcuY2Fyb3VzZWwtc2VhdCcpXG5cbm5leHQgPSAoZWwpIC0+IGlmIGVsLm5leHQoKS5sZW5ndGggPiAwIHRoZW4gZWwubmV4dCgpIGVsc2Ugc2VhdHMuZmlyc3QoKVxucHJldiA9IChlbCkgLT4gaWYgZWwucHJldigpLmxlbmd0aCA+IDAgdGhlbiBlbC5wcmV2KCkgZWxzZSBzZWF0cy5sYXN0KClcblxuJCgnLnRvZ2dsZScpLm9uKCdjbGljaycsIChlKSAtPlxuICBlbCA9ICQoJy5pcy1yZWYnKS5yZW1vdmVDbGFzcygnaXMtcmVmJylcblxuICBpZiAkKGUuY3VycmVudFRhcmdldCkuZGF0YSgndG9nZ2xlJykgaXMgJ25leHQnXG4gICAgbmV3X3NlYXQgPSBuZXh0KGVsKVxuICAgIGNhcm91c2VsLnJlbW92ZUNsYXNzKCdpcy1yZXZlcnNpbmcnKVxuICBlbHNlXG4gICAgbmV3X3NlYXQgPSBwcmV2KGVsKVxuICAgIGNhcm91c2VsLmFkZENsYXNzKCdpcy1yZXZlcnNpbmcnKVxuICBcbiAgbmV3X3NlYXQuYWRkQ2xhc3MoJ2lzLXJlZicpLmNzcygnb3JkZXInLCAxKVxuICBuZXdfc2VhdCA9IG5leHQobmV3X3NlYXQpLmNzcygnb3JkZXInLCBpKSBmb3IgaSBpbiBbMi4uc2VhdHMubGVuZ3RoXVxuICAgIFxuICBjYXJvdXNlbC5yZW1vdmVDbGFzcygnaXMtc2V0JylcbiAgc2V0VGltZW91dCAoLT4gY2Fyb3VzZWwuYWRkQ2xhc3MoJ2lzLXNldCcpKSwgNTBcbikiXX0=
 //# sourceURL=coffeescript





 