// Common app JS for all pages
document.addEventListener('DOMContentLoaded', function(){

  // Sidebar toggle for mobile
  const toggles = document.querySelectorAll('#sidebarToggle');
  toggles.forEach(btn => btn.addEventListener('click', function(){
    document.querySelector('.sidebar').classList.toggle('d-none');
  }));

  // ---------- SAMPLE DATA ----------
  // orders/products/customers arrays used across pages
  window.sampleOrders = window.sampleOrders || [
    { id: '#OD1001', customer: 'Aisha Khan', date: '2025-09-18', status: 'Processing', total: '$129.00' },
    { id: '#OD1002', customer: 'Rafi Ahmed', date: '2025-09-18', status: 'Shipped', total: '$39.00' },
    { id: '#OD1003', customer: 'Mina Das', date: '2025-09-17', status: 'Delivered', total: '$249.00' },
    { id: '#OD1004', customer: 'Kamal Hossain', date: '2025-09-16', status: 'Cancelled', total: '$49.00' },
    { id: '#OD1005', customer: 'Sadia Noor', date: '2025-09-15', status: 'Processing', total: '$19.00' },
  ];

  window.sampleProducts = window.sampleProducts || [
    { name: 'Wireless Headphones', sku: 'WH-231', cat: 'Audio', stock: 125, price: 79.00, status: 'Active' },
    { name: 'Smart Watch Pro', sku: 'SW-980', cat: 'Wearables', stock: 37, price: 199.00, status: 'Low' },
    { name: 'Portable Speaker', sku: 'PS-11', cat: 'Audio', stock: 98, price: 49.00, status: 'Active' },
  ];

  window.sampleCustomers = window.sampleCustomers || [
    { name: 'Aisha Khan', email: 'aisha@example.com', joined: '2025-09-18', orders: 3 },
    { name: 'Rafi Ahmed', email: 'rafi@example.com', joined: '2025-09-18', orders: 5 },
    { name: 'Mina Das', email: 'mina@example.com', joined: '2025-09-17', orders: 1 },
  ];

  // ---------- UTILS ----------
  function renderStatus(s){
    const map = {
      'Processing':'<span class="badge bg-info text-dark">Processing</span>',
      'Shipped':'<span class="badge bg-primary">Shipped</span>',
      'Delivered':'<span class="badge bg-success">Delivered</span>',
      'Cancelled':'<span class="badge bg-danger">Cancelled</span>'
    };
    return map[s]||('<span class="badge bg-secondary">'+s+'</span>');
  }

  // ---------- DASHBOARD: index.html ----------
  if(document.getElementById('updatedAt')){
    document.getElementById('updatedAt').textContent = new Date().toLocaleString();
  }

  // Render orders table on pages that include #ordersTbody
  const ordersTbody = document.getElementById('ordersTbody');
  function renderOrders(list, tbodyEl){
    if(!tbodyEl) return;
    tbodyEl.innerHTML = '';
    list.forEach(o => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td><strong>${o.id}</strong></td>
        <td>${o.customer}</td>
        <td>${o.date}</td>
        <td>${renderStatus(o.status)}</td>
        <td class="text-end">${o.total}</td>`;
      tbodyEl.appendChild(tr);
    });
  }
  if(ordersTbody) renderOrders(sampleOrders, ordersTbody);

  // Render products on dashboard
  const productsTbody = document.getElementById('productsTbody');
  function renderProducts(list, tbodyEl){
    if(!tbodyEl) return;
    tbodyEl.innerHTML = '';
    list.forEach(p => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td>${p.name}</td>
        <td>${p.sku}</td>
        <td>${p.stock}</td>
        <td>$${p.price.toFixed(2)}</td>
        <td>${p.status==='Active'?'<span class="badge bg-success">Active</span>':'<span class="badge bg-warning">'+p.status+'</span>'}</td>
        <td class="text-end"><a href="product-add.html" class="btn btn-sm btn-outline-primary">Edit</a></td>
      `;
      tbodyEl.appendChild(tr);
    });
  }
  renderProducts(sampleProducts, productsTbody);

  // Activity & new customers
  const activityList = document.getElementById('activityList');
  if(activityList){
    const activities = [
      'Order #OD1003 marked as Delivered',
      'New customer: Aisha Khan',
      'Product "Smart Watch Pro" stock low',
      'Coupon SUMMER25 created'
    ];
    activities.forEach(a => { const li = document.createElement('li'); li.textContent = a; activityList.appendChild(li); });
  }
  const newCustomersEl = document.getElementById('newCustomers');
  if(newCustomersEl){
    sampleCustomers.slice(0,4).forEach(n => {
      const li = document.createElement('li');
      li.innerHTML = `<div class="d-flex align-items-center gap-2"><img src="https://i.pravatar.cc/32?u=${n.email}" class="rounded-circle"> <div><div>${n.name}</div><div class="small-muted">Joined ${n.joined}</div></div></div>`;
      newCustomersEl.appendChild(li);
    });
  }

  // Load more
  const loadMoreBtn = document.getElementById('loadMore');
  if(loadMoreBtn){
    loadMoreBtn.addEventListener('click', function(){
      const more = { id: '#OD1006', customer: 'Jamal Uddin', date: '2025-09-14', status: 'Processing', total: '$59.00' };
      sampleOrders.push(more);
      if(ordersTbody) renderOrders(sampleOrders, ordersTbody);
      // update counts
      updateCounts();
    });
  }

  // Global search across dashboard orders
  const globalSearch = document.getElementById('globalSearch');
  if(globalSearch){
    globalSearch.addEventListener('input', function(e){
      const q = e.target.value.toLowerCase().trim();
      if(!q){ renderOrders(sampleOrders, ordersTbody); return; }
      const filtered = sampleOrders.filter(o => (o.id+o.customer+o.date+o.status+o.total).toLowerCase().includes(q));
      renderOrders(filtered, ordersTbody);
    });
  }

  // CSV export
  function exportOrdersCSV(list){
    const rows = [['Order','Customer','Date','Status','Total']];
    list.forEach(o => rows.push([o.id,o.customer,o.date,o.status,o.total]));
    const csv = rows.map(r=> r.map(c=> '"'+String(c).replace(/"/g,'""')+'"').join(',')).join('\n');
    const blob = new Blob([csv], {type:'text/csv'});
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a'); a.href = url; a.download = 'orders.csv'; a.click(); URL.revokeObjectURL(url);
  }
  const exportBtn = document.getElementById('exportBtn');
  if(exportBtn) exportBtn.addEventListener('click', ()=> exportOrdersCSV(sampleOrders));
  const exportOrdersCsvBtn = document.getElementById('exportOrdersCsvBtn');
  if(exportOrdersCsvBtn) exportOrdersCsvBtn.addEventListener('click', ()=> exportOrdersCSV(sampleOrders));
  const exportCsvBtn = document.getElementById('exportCsvBtn');
  if(exportCsvBtn) exportCsvBtn.addEventListener('click', ()=> exportOrdersCSV(sampleOrders));

  // ---------- ORDERS PAGE ----------
  const ordersPageTbody = document.getElementById('ordersPageTbody');
  function populateOrdersPage(limit){
    if(!ordersPageTbody) return;
    ordersPageTbody.innerHTML = '';
    (window.sampleOrders || []).slice(0, limit || 10).forEach(o => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td><input type="checkbox" class="orderCheckbox"></td>
        <td><strong>${o.id}</strong></td>
        <td>${o.customer}</td>
        <td>${o.date}</td>
        <td>${renderStatus(o.status)}</td>
        <td class="text-end">${o.total}</td>
      `;
      ordersPageTbody.appendChild(tr);
    });
    const summary = document.getElementById('ordersSummary');
    if(summary) summary.textContent = `Showing ${Math.min((window.sampleOrders||[]).length, limit || 10)} orders`;
  }
  if(ordersPageTbody) populateOrdersPage(10);

  // filter by status on orders page
  const statusFilter = document.getElementById('statusFilter');
  if(statusFilter){
    statusFilter.addEventListener('change', function(){
      const val = this.value;
      if(!val) populateOrdersPage(100);
      else {
        const filtered = (window.sampleOrders||[]).filter(o => o.status === val);
        renderOrders(filtered, ordersPageTbody);
      }
    });
  }

  // select all orders
  const selectAllOrders = document.getElementById('selectAllOrders');
  if(selectAllOrders){
    selectAllOrders.addEventListener('change', function(){
      document.querySelectorAll('.orderCheckbox').forEach(cb => cb.checked = this.checked);
    });
  }

  // orders load more
  const ordersLoadMore = document.getElementById('ordersLoadMore');
  if(ordersLoadMore){
    let limit = 10;
    ordersLoadMore.addEventListener('click', function(){
      limit += 10;
      populateOrdersPage(limit);
    });
  }

  // bulk update demo
  const bulkUpdateBtn = document.getElementById('bulkUpdateBtn');
  if(bulkUpdateBtn){
    bulkUpdateBtn.addEventListener('click', function(){
      alert('Demo: Bulk update executed (no backend).');
    });
  }

  // ---------- PRODUCTS PAGE ----------
  const productsPageTbody = document.getElementById('productsPageTbody');
  function populateProductsPage(){
    if(!productsPageTbody) return;
    productsPageTbody.innerHTML = '';
    (window.sampleProducts || []).forEach(p => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td>${p.name}</td>
        <td>${p.sku}</td>
        <td>${p.cat || '-'}</td>
        <td>${p.stock}</td>
        <td>$${p.price.toFixed(2)}</td>
        <td>${p.status==='Active'?'<span class="badge bg-success">Active</span>':'<span class="badge bg-warning">'+p.status+'</span>'}</td>
        <td class="text-end">
          <button class="btn btn-sm btn-outline-primary editProductBtn">Edit</button>
          <button class="btn btn-sm btn-outline-danger ms-1 deleteProductBtn">Delete</button>
        </td>
      `;
      productsPageTbody.appendChild(tr);
    });
  }
  populateProductsPage();

  // product search
  const productSearch = document.getElementById('productSearch');
  if(productSearch){
    productSearch.addEventListener('input', function(){
      const q = this.value.toLowerCase().trim();
      const filtered = (window.sampleProducts||[]).filter(p => (p.name+p.sku+(p.cat||'')).toLowerCase().includes(q));
      populateProductsFiltered(filtered);
    });
  }
  function populateProductsFiltered(list){
    if(!productsPageTbody) return;
    productsPageTbody.innerHTML = '';
    list.forEach(p => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td>${p.name}</td>
        <td>${p.sku}</td>
        <td>${p.cat || '-'}</td>
        <td>${p.stock}</td>
        <td>$${p.price.toFixed(2)}</td>
        <td>${p.status==='Active'?'<span class="badge bg-success">Active</span>':'<span class="badge bg-warning">'+p.status+'</span>'}</td>
        <td class="text-end"><button class="btn btn-sm btn-outline-primary">Edit</button></td>
      `;
      productsPageTbody.appendChild(tr);
    });
  }

  // product add form
  const productAddForm = document.getElementById('productAddForm');
  if(productAddForm){
    productAddForm.addEventListener('submit', function(e){
      e.preventDefault();
      const newP = {
        name: document.getElementById('p_name').value.trim(),
        sku: document.getElementById('p_sku').value.trim(),
        cat: document.getElementById('p_category').value.trim(),
        stock: Number(document.getElementById('p_stock').value || 0),
        price: Number(document.getElementById('p_price').value || 0),
        status: document.getElementById('p_status').value || 'Active',
        desc: document.getElementById('p_desc').value || ''
      };
      window.sampleProducts.push(newP);
      alert('Product saved (demo). Redirecting to products page.');
      window.location.href = 'products.html';
    });
  }

  // ---------- CUSTOMERS PAGE ----------
  const customersPageTbody = document.getElementById('customersPageTbody');
  function populateCustomers(){
    if(!customersPageTbody) return;
    customersPageTbody.innerHTML = '';
    (window.sampleCustomers || []).forEach(c => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td>${c.name}</td>
        <td>${c.email}</td>
        <td>${c.joined}</td>
        <td>${c.orders}</td>
        <td class="text-end"><button class="btn btn-sm btn-outline-primary">View</button></td>
      `;
      customersPageTbody.appendChild(tr);
    });
  }
  populateCustomers();

  // customers search
  const customersSearch = document.getElementById('customersSearch');
  if(customersSearch){
    customersSearch.addEventListener('input', function(){
      const q = this.value.toLowerCase().trim();
      const filtered = (window.sampleCustomers||[]).filter(c => (c.name+c.email).toLowerCase().includes(q));
      if(customersPageTbody){
        customersPageTbody.innerHTML = '';
        filtered.forEach(c => {
          const tr = document.createElement('tr');
          tr.innerHTML = `<td>${c.name}</td><td>${c.email}</td><td>${c.joined}</td><td>${c.orders}</td><td class="text-end"><button class="btn btn-sm btn-outline-primary">View</button></td>`;
          customersPageTbody.appendChild(tr);
        });
      }
    });
  }

  // ---------- ANALYTICS PAGE ----------
  if(document.getElementById('revenueChart')){
    const ctx = document.getElementById('revenueChart').getContext('2d');
    const labels = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    const data = labels.map(()=> Math.floor(Math.random()*8000 + 2000));
    new Chart(ctx, {
      type: 'bar',
      data: { labels, datasets: [{ label:'Revenue', data, backgroundColor:'rgba(13,110,253,0.12)', borderColor:'rgba(13,110,253,0.95)', borderWidth:1 }] },
      options: { responsive:true, plugins:{legend:{display:false}} }
    });
  }
  if(document.getElementById('trafficChart')){
    const ctx2 = document.getElementById('trafficChart').getContext('2d');
    new Chart(ctx2, {
      type: 'doughnut',
      data: {
        labels: ['Organic','Paid','Referral','Social'],
        datasets: [{ data: [55,20,13,12], backgroundColor: ['#0d6efd','#6c757d','#198754','#fd7e14'] }]
      },
      options: { responsive:true, plugins:{legend:{position:'bottom'}} }
    });
  }
  const topProductsList = document.getElementById('topProductsList');
  if(topProductsList){
    topProductsList.innerHTML = `<ul class="list-unstyled mb-0">
      <li class="d-flex justify-content-between py-2 border-bottom"><div>Wireless Headphones</div><div><strong>$6,000</strong></div></li>
      <li class="d-flex justify-content-between py-2 border-bottom"><div>Smart Watch Pro</div><div><strong>$4,200</strong></div></li>
      <li class="d-flex justify-content-between py-2"><div>Portable Speaker</div><div><strong>$3,100</strong></div></li>
    </ul>`;
  }

  // ---------- PROFILE ----------
  const profileActivity = document.getElementById('profileActivity');
  if(profileActivity){
    ['Signed in','Updated product catalog','Reviewed orders'].forEach(a => {
      const li = document.createElement('li'); li.textContent = a; profileActivity.appendChild(li);
    });
  }

  // ---------- SETTINGS ----------
  const settingsForm = document.getElementById('settingsForm');
  if(settingsForm){
    settingsForm.addEventListener('submit', function(e){
      e.preventDefault();
      alert('Settings saved (demo).');
    });
  }

  // ---------- AUTH (login/signup) ----------
  const loginForm = document.getElementById('loginForm');
  if(loginForm){
    loginForm.addEventListener('submit', function(e){
      e.preventDefault();
      // demo: accept any credentials
      window.location.href = 'index.html';
    });
  }
  const signupForm = document.getElementById('signupForm');
  if(signupForm){
    signupForm.addEventListener('submit', function(e){
      e.preventDefault();
      if(document.getElementById('su_pass').value !== document.getElementById('su_confirm').value){
        alert('Passwords do not match');
        return;
      }
      alert('Account created (demo). Redirecting to login.');
      window.location.href = 'login.html';
    });
  }

  // ---------- HELPERS ----------
  function updateCounts(){
    const oc = document.getElementById('ordersCount');
    const cc = document.getElementById('customersCount');
    if(oc) oc.textContent = (window.sampleOrders||[]).length;
    if(cc) cc.textContent = (window.sampleCustomers||[]).length;
  }
  updateCounts();

  // orders page search
  const ordersSearch = document.getElementById('ordersSearch');
  if(ordersSearch){
    ordersSearch.addEventListener('input', function(){
      const q = this.value.toLowerCase().trim();
      if(!ordersPageTbody

      ) return;
      if(!q){ populateOrdersPage(100); return; }
      const filtered = (window.sampleOrders||[]).filter(o => (o.id+o.customer+o.date+o.status+o.total).toLowerCase().includes(q));
      renderOrders(filtered, ordersPageTbody);
    });}
});

// End of app.js