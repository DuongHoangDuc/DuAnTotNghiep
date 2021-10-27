$(function() {
  var countdown = function(tabs, end, elements, callback) {
    var _tabs = tabs;
    var _second = 1000;
    var _minutes = _second * 60;
    var _hours = _minutes * 60;
    var _days = _hours * 24;
    var end = new Date(end);
    var timer;
    var calculate = function() {
      var now = new Date(),
        remaining = end.getTime() - now.getTime(),
        data;
      if (isNaN(end)) {
        console.log('Invalid date/time');
        return;
      }
      if (remaining <= 0) {
        clearInterval(timer);
        if (typeof(callback) === 'function') {
          callback();
        };
      } else {
        if (!timer) {
          timer = setInterval(calculate, _second);
        };
      }

      data = {
        'days': Math.floor(remaining / _days),
        'hours': Math.floor((remaining % _days) / _hours),
        'minutes': Math.floor((remaining % _hours) / _minutes),
        'seconds': Math.floor((remaining % _minutes) / _second)
      }
      if (elements.length) {
        for (x in elements) {
          var x = elements[x];
          data[x] = ('00' + data[x]).slice(-2);
          $('#js-nav-' + _tabs + '-' + x).text(data[x]);
        };
      };
    };
    calculate();
  };

  countdown('home', '10/14/2021', ['days', 'hours', 'minutes', 'seconds'], function() {
    console.log('hết Hạn');
  });

  countdown('profile', '10/20/2021', ['days', 'hours', 'minutes', 'seconds'], function() {
    console.log('hết Hạn');
  });
  countdown('contact', '10/01/2021', ['days', 'hours', 'minutes', 'seconds'], function() {
    console.log('hết Hạn');
  });
  countdown('contact2', '10/14/2021', ['days', 'hours', 'minutes', 'seconds'], function() {
    console.log('hết Hạn');
  });
  countdown('contact3', '11/29/2021', ['days', 'hours', 'minutes', 'seconds'], function() {
    console.log('hết Hạn');
  });
})