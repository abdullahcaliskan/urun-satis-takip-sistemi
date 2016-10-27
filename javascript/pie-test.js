$(document).ready(function(){
  $.ajax({
    url:'apo.php',
    type:'POST',
    data:sended,
    success:function(){

    }
  })
  var data = [
    ['Teknisyen 1', deger],['Teknisyen 2', deger1], ['Teknisyen 3', deger2] 
    
  ];
  var plot1 = jQuery.jqplot ('chart7', [data], 
    { 
      seriesDefaults: {
        // Make this a pie chart.
        renderer: jQuery.jqplot.PieRenderer, 
        rendererOptions: {
          // Put data labels on the pie slices.
          // By default, labels show the percentage of the slice.
          showDataLabels: true
        }
      }, 
      legend: { show:true, location: 'e', showSwatches: true}
    }
  );
});