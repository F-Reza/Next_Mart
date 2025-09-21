// Basic admin JS: sidebar toggle, small interactions, demo chart data, image preview

document.addEventListener('DOMContentLoaded', function () {
  // Sidebar toggle behavior for all pages
  const sidebar = document.getElementById('sidebar');
  const sidebarToggleButtons = document.querySelectorAll('#sidebarToggle');

  sidebarToggleButtons.forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      // For small screens use class toggle, otherwise collapse width
      if (window.innerWidth < 992) {
        sidebar.classList.toggle('open');
      } else {
        if (sidebar.style.width === '70px') {
          sidebar.style.width = '';
        } else {
          sidebar.style.width = '70px';
        }
      }
    });
  });

  // Insert current year
  const yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // Product image preview (product-add page)
  const imageInput = document.getElementById('imageInput');
  const imgPreview = document.getElementById('imgPreview');
  if (imageInput && imgPreview) {
    imageInput.addEventListener('change', function () {
      const file = this.files[0];
      if (!file) return;
      const url = URL.createObjectURL(file);
      imgPreview.src = url;
    });
  }

  // Save product demo
  const saveBtn = document.getElementById('saveBtn');
  if (saveBtn) {
    saveBtn.addEventListener('click', function () {
      const alertEl = document.getElementById('saveAlert');
      if (alertEl) {
        alertEl.classList.remove('d-none');
        setTimeout(() => alertEl.classList.add('d-none'), 2500);
      }
    });
  }

  // Charts: initialize if present
  // Sales chart (dashboard)
  const salesCtx = document.getElementById('salesChart');
  if (salesCtx) {
    const salesChart = new Chart(salesCtx, {
      type: 'line',
      data: {
        labels: generateLabels(30),
        datasets: [{
          label: 'Sales ($)',
          data: generateRandomData(30, 200, 1200),
          fill: true,
          tension: .35,
          borderWidth: 2,
        }]
      },
      options: {
        plugins: { legend: { display: false } },
        scales: {
          x: { grid: { display: false } },
          y: { beginAtZero: true }
        }
      }
    });

    const rangeSelect = document.getElementById('rangeSelect');
    if (rangeSelect) {
      rangeSelect.addEventListener('change', function () {
        const days = parseInt(this.value, 10);
        salesChart.data.labels = generateLabels(days);
        salesChart.data.datasets[0].data = generateRandomData(days, 200, 1200);
        salesChart.update();
      });
    }
  }

  // Revenue chart (analytics)
  const revenueCtx = document.getElementById('revenueChart');
  if (revenueCtx) {
    new Chart(revenueCtx, {
      type: 'bar',
      data: {
        labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
        datasets: [{ label: 'Revenue', data: generateRandomData(12, 2000, 12000), borderWidth: 1 }]
      },
      options: {
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
      }
    });
  }

  // Category pie (analytics)
  const categoryCtx = document.getElementById('categoryChart');
  if (categoryCtx) {
    new Chart(categoryCtx, {
      type: 'doughnut',
      data: {
        labels: ['Electronics', 'Apparel', 'Home', 'Beauty', 'Other'],
        datasets: [{ data: [45, 18, 14, 10, 13] }]
      },
      options: { plugins: { legend: { position: 'bottom' } } }
    });
  }

  // small utilities
  function generateLabels(n) {
    const out = [];
    for (let i = n; i >= 1; i--) {
      out.push(`${i}d`);
    }
    return out.reverse();
  }

  function generateRandomData(n, min, max) {
    const arr = [];
    for (let i = 0; i < n; i++) {
      arr.push(Math.floor(Math.random() * (max - min + 1)) + min);
    }
    return arr;
  }
});
