const ctx = document.getElementById("donationAnalytics");
const modal = document.getElementById("detailsModal");

new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sept",
      "Oct",
      "Nov",
      "Dec",
    ],
    datasets: [
      {
        label: "Activity",
        fill: false,
        data: [50, 60, 70, 80, 90, 80, 70, 60, 50, 40, 50, 60, 70],
        lineTension: 0,
        pointRadius: 1,
        pointHoverRadius: 10,
        borderColor: "#880808",
        borderWidth: 2,
      },
      {
        label: "Activity",
        fill: false,
        data: [70, 80, 90, 80, 70, 60, 50, 40, 50, 60, 70, 80, 90],
        lineTension: 0,
        pointRadius: 1,
        pointHoverRadius: 10,
        borderColor: "#A155B9",
        borderWidth: 2,
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: { display: false },
    scales: {
      x: {
        grid: {
          display: false,
        },
      },
      y: {
        grid: {
          display: false,
        },
      },
    },
    plugins: {
      legend: {
        display: false,
      },
      tooltips: {
        callbacks: {
          label: (tooltipItem) => {
            return tooltipItem.yLabel;
          },
        },
      },
    },
  },
});

function toggleModal() {
  modal.classList.toggle("show");
}
