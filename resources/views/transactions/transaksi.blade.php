@extends('layouts.app')

@section('title', 'Transaksi Hari Ini')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="bi bi-calendar3 me-2"></i>Transaksi Hari Ini
                    <small class="ms-2">(09 December 2025)</small>
                </h5>
            </div>

            <div class="card-body">
                <!-- Today's Summary -->
                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <div class="card border-success">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-muted">Transaksi Hari Ini</h6>
                                        <h2 class="mb-0" id="todayCount">5</h2>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="bi bi-receipt" style="font-size: 2.5rem; color: #198754;"></i>
                                    </div>
                                </div>
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i>Shift: 
                                    <span id="currentShift">Pagi (08-16)</span>
                                </small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <div class="card border-primary">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-muted">Total Pendapatan</h6>
                                        <h2 class="mb-0" id="todayRevenue">Rp 560.174</h2>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="bi bi-cash-coin" style="font-size: 2.5rem; color: #0d6efd;"></i>
                                    </div>
                                </div>
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i>
                                    Update terakhir: <span id="lastUpdate">14:53</span>
                                </small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <div class="card border-warning">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-muted">Produk Terjual</h6>
                                        <h2 class="mb-0" id="productsSold">50</h2>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="bi bi-cart-check" style="font-size: 2.5rem; color: #ffc107;"></i>
                                    </div>
                                </div>
                                <small class="text-muted">
                                    <i class="bi bi-person me-1"></i>Kasir: 
                                    <span id="cashierName">Kasir</span>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ringkasan Hari ini Section - Versi Diperbaiki -->
                <div class="card summary-card mb-4">
                    <div class="card-header bg-gradient-dark text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-0">
                                    <i class="bi bi-file-earmark-text me-2"></i>Ringkasan Hari Ini
                                </h5>
                                <small class="text-light opacity-75">Laporan transaksi harian sistem POS</small>
                            </div>
                            <div class="summary-stats">
                                <span class="badge bg-light text-dark me-2">
                                    <i class="bi bi-clock-history me-1"></i>Terakhir update: 14:53
                                </span>
                                <span class="badge bg-success">
                                    <i class="bi bi-check-circle me-1"></i>Aktif
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="summary-content">
                                    <h6 class="text-muted mb-3">Statistik Hari Ini:</h6>
                                    <div class="row">
                                        <div class="col-6 col-md-3 mb-3">
                                            <div class="stat-item">
                                                <div class="stat-label">Total Transaksi</div>
                                                <div class="stat-value">5</div>
                                                <div class="stat-trend text-success">
                                                    <i class="bi bi-arrow-up-right"></i> Stabil
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 mb-3">
                                            <div class="stat-item">
                                                <div class="stat-label">Total Pendapatan</div>
                                                <div class="stat-value">Rp 560K</div>
                                                <div class="stat-trend text-primary">
                                                    <i class="bi bi-graph-up"></i> +12%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 mb-3">
                                            <div class="stat-item">
                                                <div class="stat-label">Produk Terjual</div>
                                                <div class="stat-value">50</div>
                                                <div class="stat-trend text-warning">
                                                    <i class="bi bi-basket"></i> 10/item
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 mb-3">
                                            <div class="stat-item">
                                                <div class="stat-label">Rata-rata</div>
                                                <div class="stat-value">Rp 112K</div>
                                                <div class="stat-trend text-info">
                                                    <i class="bi bi-calculator"></i> Per transaksi
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <h6 class="text-muted mb-2">Detail Waktu Operasional:</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="time-info">
                                                    <i class="bi bi-clock text-primary me-2"></i>
                                                    <span class="me-3">Transaksi Pertama: <strong>10:53</strong></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="time-info">
                                                    <i class="bi bi-clock-history text-success me-2"></i>
                                                    <span>Transaksi Terakhir: <strong>14:53</strong></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action-panel">
                                    <h6 class="text-muted mb-3">Aksi Laporan:</h6>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success btn-lg mb-2" id="printTodayBtn">
                                            <i class="bi bi-printer me-2"></i>Cetak Laporan
                                        </button>
                                        <button class="btn btn-primary btn-lg mb-2" id="exportTodayBtn">
                                            <i class="bi bi-download me-2"></i>Export Data
                                        </button>
                                        <button class="btn btn-outline-dark btn-lg" id="viewDetailsBtn">
                                            <i class="bi bi-eye me-2"></i>Detail Lengkap
                                        </button>
                                    </div>
                                    
                                    <div class="mt-4 pt-3 border-top">
                                        <small class="text-muted">
                                            <i class="bi bi-info-circle me-1"></i>
                                            Laporan ini mencakup semua transaksi dari shift Pagi (08-16)
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Transactions Table -->
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-light">
                <h5 class="mb-0">
                    <i class="bi bi-arrow-down-circle me-2"></i>Tracker Transaksi
                </h5>
            </div>
            <div class="card-body">
                <!-- Quick Stats -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="alert alert-light py-2">
                            <small class="text-muted">Transaksi Pertama</small>
                            <div class="fw-bold" id="firstTransaction">10:53</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="alert alert-light py-2">
                            <small class="text-muted">Transaksi Terakhir</small>
                            <div class="fw-bold" id="lastTransaction">14:53</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="alert alert-light py-2">
                            <small class="text-muted">Rata-rata/Transaksi</small>
                            <div class="fw-bold" id="averageTransaction">Rp 112.034,8</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="alert alert-light py-2">
                            <small class="text-muted">Status</small>
                            <div>
                                <span class="badge bg-success" id="shiftStatus">Aktif</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transactions List -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th width="60">No</th>
                                <th>Waktu</th>
                                <th>Invoice</th>
                                <th>Items</th>
                                <th>Total</th>
                                <th>Metode</th>
                                <th width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="transactionsBody">
                            <tr class="transaction-row">
                                <td>1</td>
                                <td>
                                    <span class="time-badge time-evening">
                                        <i class="bi bi-clock me-1"></i>14:53
                                    </span>
                                </td>
                                <td><strong>INV-2025-009001</strong></td>
                                <td><span class="badge bg-secondary">10 items</span></td>
                                <td><strong>Rp 85.000</strong></td>
                                <td><span class="badge bg-success">Tunai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="transaction-row">
                                <td>2</td>
                                <td>
                                    <span class="time-badge time-afternoon">
                                        <i class="bi bi-clock me-1"></i>13:58
                                    </span>
                                </td>
                                <td><strong>INV-2025-009102</strong></td>
                                <td><span class="badge bg-secondary">10 items</span></td>
                                <td><strong>Rp 78.799</strong></td>
                                <td><span class="badge bg-success">Tunai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="transaction-row">
                                <td>3</td>
                                <td>
                                    <span class="time-badge time-afternoon">
                                        <i class="bi bi-clock me-1"></i>12:19
                                    </span>
                                </td>
                                <td><strong>INV-2025-009103</strong></td>
                                <td><span class="badge bg-secondary">10 items</span></td>
                                <td><strong>Rp 178.423</strong></td>
                                <td><span class="badge bg-success">Tunai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="transaction-row">
                                <td>4</td>
                                <td>
                                    <span class="time-badge time-morning">
                                        <i class="bi bi-clock me-1"></i>11:24
                                    </span>
                                </td>
                                <td><strong>INV-2025-009104</strong></td>
                                <td><span class="badge bg-secondary">10 items</span></td>
                                <td><strong>Rp 47.514</strong></td>
                                <td><span class="badge bg-success">Tunai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="transaction-row">
                                <td>5</td>
                                <td>
                                    <span class="time-badge time-morning">
                                        <i class="bi bi-clock me-1"></i>10:53
                                    </span>
                                </td>
                                <td><strong>INV-2025-009105</strong></td>
                                <td><span class="badge bg-secondary">10 items</span></td>
                                <td><strong>Rp 170.438</strong></td>
                                <td><span class="badge bg-success">Tunai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Transaction Details -->
<div class="modal fade" id="transactionDetailModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-receipt me-2"></i>Detail Transaksi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="transactionDetailContent">
                <!-- Detail akan diisi via JavaScript -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" onclick="printReceipt()">
                    <i class="bi bi-printer me-2"></i>Cetak Ulang
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Simple styling for today's transactions */
    .transaction-row {
        transition: background-color 0.2s;
    }
    
    .transaction-row:hover {
        background-color: rgba(67, 97, 238, 0.05);
    }
    
    .time-badge {
        font-size: 0.85rem;
        padding: 4px 10px;
        border-radius: 20px;
    }
    
    .time-morning {
        background-color: #e3f2fd;
        color: #1565c0;
    }
    
    .time-afternoon {
        background-color: #fff3e0;
        color: #f57c00;
    }
    
    .time-evening {
        background-color: #f3e5f5;
        color: #7b1fa2;
    }
    
    /* Styling untuk Ringkasan Hari Ini yang diperbaiki */
    .summary-card {
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
    }
    
    .bg-gradient-dark {
        background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
    }
    
    .summary-stats {
        display: flex;
        align-items: center;
    }
    
    .stat-item {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 10px;
        text-align: center;
        transition: transform 0.2s;
        height: 100%;
    }
    
    .stat-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .stat-label {
        font-size: 0.85rem;
        color: #6c757d;
        margin-bottom: 5px;
        font-weight: 500;
    }
    
    .stat-value {
        font-size: 1.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 5px;
    }
    
    .stat-trend {
        font-size: 0.75rem;
        font-weight: 500;
    }
    
    .time-info {
        background: #f8f9fa;
        padding: 10px 15px;
        border-radius: 8px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }
    
    .action-panel {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        height: 100%;
    }
    
    /* Button styling */
    .btn-lg {
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        font-weight: 500;
    }
    
    /* Card header styling */
    .card-header.bg-light {
        background-color: #f8f9fa !important;
        border-bottom: 1px solid #dee2e6;
    }
    
    /* Status indicator */
    .status-indicator {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 5px;
    }
    
    .status-completed {
        background-color: #28a745;
    }
    
    .status-pending {
        background-color: #ffc107;
    }
</style>
@endsection

@section('scripts')
<script>
    // Format currency
    function formatCurrency(amount) {
        return 'Rp ' + new Intl.NumberFormat('id-ID').format(amount);
    }
    
    // Show transaction detail modal
    function showTransactionDetail(transactionId) {
        // Sample transaction detail
        const transaction = {
            id: transactionId,
            invoice: 'INV-2025-009001',
            time: '14:53',
            items: 10,
            total: 85000,
            method: 'Tunai',
            details: [
                { name: 'Kopi Hitam', qty: 2, price: 15000 },
                { name: 'Teh Manis', qty: 5, price: 10000 },
                { name: 'Roti Bakar', qty: 3, price: 5000 }
            ]
        };
        
        const modalContent = document.getElementById('transactionDetailContent');
        
        // Build items list
        let itemsHtml = '';
        let itemsTotal = 0;
        transaction.details.forEach(item => {
            const subtotal = item.qty * item.price;
            itemsTotal += subtotal;
            itemsHtml += `
                <div class="d-flex justify-content-between mb-2">
                    <div>
                        <span class="fw-bold">${item.name}</span>
                        <br>
                        <small class="text-muted">${item.qty} x ${formatCurrency(item.price)}</small>
                    </div>
                    <div class="fw-bold">
                        ${formatCurrency(subtotal)}
                    </div>
                </div>
            `;
        });
        
        const detailHtml = `
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">${transaction.invoice}</h6>
                    <span class="badge bg-success">
                        Selesai
                    </span>
                </div>
                <small class="text-muted">
                    <i class="bi bi-clock me-1"></i>${transaction.time} • 
                    <i class="bi bi-cash-coin me-1"></i>${transaction.method}
                </small>
            </div>
            
            <hr>
            
            <h6 class="mb-3">Items:</h6>
            ${itemsHtml}
            
            <hr>
            
            <div class="d-flex justify-content-between fw-bold fs-5">
                <span>Total:</span>
                <span class="text-primary">${formatCurrency(transaction.total)}</span>
            </div>
            
            <div class="mt-3">
                <small class="text-muted">
                    <i class="bi bi-info-circle me-1"></i>
                    Transaksi ini tercatat dalam sistem hari ini
                </small>
            </div>
        `;
        
        modalContent.innerHTML = detailHtml;
        
        // Show modal
        const modal = new bootstrap.Modal(document.getElementById('transactionDetailModal'));
        modal.show();
    }
    
    // Print receipt
    function printReceipt() {
        alert('Fitur cetak struk akan membuka jendela print...');
        window.print();
    }
    
    // Export today's transactions
    document.getElementById('exportTodayBtn').addEventListener('click', function() {
        const btn = this;
        const originalText = btn.innerHTML;
        
        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Exporting...';
        btn.disabled = true;
        
        setTimeout(() => {
            btn.innerHTML = originalText;
            btn.disabled = false;
            
            // Sample transactions data
            const todayTransactions = [
                { invoice: 'INV-2025-009001', time: '14:53', items: 10, total: 85000, method: 'Tunai' },
                { invoice: 'INV-2025-009102', time: '13:58', items: 10, total: 78799, method: 'Tunai' },
                { invoice: 'INV-2025-009103', time: '12:19', items: 10, total: 178423, method: 'Tunai' },
                { invoice: 'INV-2025-009104', time: '11:24', items: 10, total: 47514, method: 'Tunai' },
                { invoice: 'INV-2025-009105', time: '10:53', items: 10, total: 170438, method: 'Tunai' }
            ];
            
            // Create CSV content
            let csvContent = "data:text/csv;charset=utf-8,";
            csvContent += "No,Invoice,Waktu,Items,Total,Metode\n";
            
            todayTransactions.forEach((transaction, index) => {
                csvContent += `${index + 1},${transaction.invoice},${transaction.time},${transaction.items},${transaction.total},${transaction.method}\n`;
            });
            
            // Create download link
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", `transaksi_hariini_2025-12-09.csv`);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }, 1000);
    });
    
    // Print today's summary
    document.getElementById('printTodayBtn').addEventListener('click', function() {
        // Open print dialog
        window.print();
    });
    
    // View details button
    document.getElementById('viewDetailsBtn')?.addEventListener('click', function() {
        alert('Menampilkan detail lengkap laporan...');
        // Redirect to detailed report page
        // window.location.href = '/reports/detail';
    });
    
    // Add click event to all eye buttons
    document.addEventListener('DOMContentLoaded', function() {
        const eyeButtons = document.querySelectorAll('.btn-outline-primary');
        eyeButtons.forEach((button, index) => {
            button.addEventListener('click', function() {
                showTransactionDetail(index + 1);
            });
        });
        
        // Get cashier name from localStorage
        const rememberedUser = localStorage.getItem('rememberedUser');
        if (rememberedUser) {
            document.getElementById('cashierName').textContent = rememberedUser;
        } else {
            document.getElementById('cashierName').textContent = 'Kasir';
        }
    });
</script>
@endsection