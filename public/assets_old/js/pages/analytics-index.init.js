/**
 * Theme: Dastone - Tailwind Admin Dashboard Template
 * Author: Mannatthemes
 * Analytics Dashboard Js
 */

try{
var options = {
  chart: {
    height: 255,
    type: "donut",
  },
  plotOptions: {
    pie: {
      donut: {
        size: "85%",
      },
    },
  },
  dataLabels: {
    enabled: false,
  },

  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"],
  },

  series: [50, 25, 25],
  legend: {
    show: true,
    position: "bottom",
    horizontalAlign: "center",
    verticalAlign: "middle",
    floating: false,
    fontSize: "13px",
    offsetX: 0,
    offsetY: 0,
  },
  labels: ["Mobile", "Tablet", "Desktop"],
  colors: ["#2a76f4", "rgba(42, 118, 244, .5)", "rgba(42, 118, 244, .18)"],

  responsive: [
    {
      breakpoint: 600,
      options: {
        plotOptions: {
          donut: {
            customScale: 0.2,
          },
        },
        chart: {
          height: 240,
        },
        legend: {
          show: false,
        },
      },
    },
  ],
  tooltip: {
    y: {
      formatter: function (val) {
        return val + " %";
      },
    },
  },
};

var chart = new ApexCharts(document.querySelector("#ana_device"), options);
chart.render();

}catch (err) {}
try{
var options = {
  chart: {
      height: 350,
      type: 'area',
      width: '100%',
      stacked: true,
      toolbar: {
        show: false,
        autoSelected: 'zoom'
      },
      dropShadow: {
        enabled: true,
        top: 12,
        left: 0,
        bottom: 0,
        right: 0,
        blur: 2,
        color: "rgba(132, 145, 183, 0.3)",
        opacity: 0.35,
      },
  },
  colors: ['#2a77f4', '#57cafd'],
  dataLabels: {
      enabled: false
  },
  stroke: {
      curve: 'smooth',
      width: [1.5, 1.5],
      dashArray: [0, 4],
      lineCap: 'round',
  },
  grid: {
    padding: {
      left: 0,
      right: 0
    },
    strokeDashArray: 3,
  },
  markers: {
    size: 0,
    hover: {
      size: 0
    }
  },
  series: [{
      name: 'New Visits',
      data: [0,60,20,90,45,110,55,130,44,110,75,120]
  }, {
      name: 'Unique Visits',
      data: [0,45,10,75,35,94,40,115,30,105,65,110]
  }],

  xaxis: {
      type: 'month',
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      axisBorder: {
        show: true,
      },  
      axisTicks: {
        show: true,
      },                  
  },
  fill: {
    type: "gradient",
    gradient: {
      shadeIntensity: 1,
      opacityFrom: 0.4,
      opacityTo: 0.1,
      stops: [0, 90, 100]
    }
  },
  
  tooltip: {
      x: {
          format: 'dd/MM/yy HH:mm'
      },
  },
  legend: {
    position: 'top',
    horizontalAlign: 'right'
  },
}

var chart = new ApexCharts(
  document.querySelector("#crm-dash"),
  options
);

chart.render();

}catch (err) {}


try{
  var chartDom = document.getElementById("visitors");
  var myChart = echarts.init(chartDom);
  var option;

  const data = [];
  for (let i = 0; i < 4; ++i) {
    data.push(Math.round(Math.random() * 200));
  }
  option = {
    grid: {
      left: "1%",
      right: "7%",
      bottom: "0%",
      top: "4%",
      containLabel: true,
    },
    xAxis: {
      max: "dataMax",
      axisLine: {
        lineStyle: {
          color: "#858d98",
        },
      },
      splitLine: {
        lineStyle: {
          color: "rgba(133, 141, 152, 0.1)",
        },
      },
    },
    yAxis: {
      type: "category",
      data: ["Organic", "Direct", "Campaign", "Social Media"],
      inverse: true,
      gridIndex: 0,
      animationDuration: 300,
      animationDurationUpdate: 300,
      max: 3, // only the largest 3 bars will be displayed,
      axisLabel: {
        color: "#858d98",
      },
      axisLine: {
        lineStyle: {
          color: "rgba(133, 141, 152, 0.2)",
        },
      },
      axisTick: {
        lineStyle: {
          color: "rgba(133, 141, 152, 0.5)",
        },
      },
      splitLine: {
        lineStyle: {
          color: "rgba(133, 141, 152, 0.1)",
        },
      },
    },
    series: [
      {
        realtimeSort: true,
        name: "Visitors",
        type: "bar",
        data: data,
        barWidth: "8",
        label: {
          show: true,
          position: "right",
          valueAnimation: true,
          color: "#95aac9",
        },
        itemStyle: {
          emphasis: {
            barBorderRadius: [0, 2, 2, 0],
          },
          normal: {
            barBorderRadius: [0, 2, 2, 0],
            color: "#5997ff",
          },
        },
      },
    ],

    legend: {
      show: false,
    },
    animationDuration: 0,
    animationDurationUpdate: 3000,
    animationEasing: "linear",
    animationEasingUpdate: "linear",
  };
  function run() {
    for (var i = 0; i < data.length; ++i) {
      if (Math.random() > 0.9) {
        data[i] += Math.round(Math.random() * 2000);
      } else {
        data[i] += Math.round(Math.random() * 200);
      }
    }
    myChart.setOption({
      series: [
        {
          type: "bar",
          data,
        },
      ],
    });
  }
  setTimeout(function () {
    run();
  }, 0);
  setInterval(function () {
    run();
  }, 3000);

  option && myChart.setOption(option);
}catch (err) {

}

try{
  
var colors = ['#98e7df', '#b8c4d0', '#bec7fa', '#ffe2a3', '#92e6f0'];
var options = {
  series: [{
  name: 'Inflation',
  data: [ 4.0, 10.1, 6.0, 8.0, 9.1]
}],
  chart: {
  height: 290,
  type: 'bar',
  toolbar:{
    show:false
  },
},
plotOptions: {
  bar: {
      dataLabels: {
          position: 'top', // top, center, bottom              
      },
      columnWidth: '20',
      distributed: true,
  },

},
dataLabels: {
  enabled: true,
  formatter: function (val) {
    return val + "%";
  },
  offsetY: -20,
  style: {
    fontSize: '12px',
    colors: ["#000"]
  }
},
colors: colors,
xaxis: {
  categories: ["Email", "Referral", "Organic", "Direct", "Campaign",],
  position: 'top',
  axisBorder: {
    show: false
  },
  axisTicks: {
    show: false
  },
  crosshairs: {
    fill: {
      type: 'gradient',
      gradient: {
        colorFrom: '#D8E3F0',
        colorTo: '#BED1E6',
        stops: [0, 100],
        opacityFrom: 0.4,
        opacityTo: 0.5,
      }
    }
  },
  tooltip: {
    enabled: true,
  },
},

grid: {
  padding: {
    left: 0,
    right: 0
  },
  strokeDashArray: 3,
},
yaxis: {
  axisBorder: {
    show: false
  },
  axisTicks: {
    show: false,
  },
  labels: {
    show: false,
    formatter: function (val) {
      return val + "%";
    }
  }

},
};

var chart = new ApexCharts(document.querySelector("#barchart"), options);
chart.render();
}catch(err){}