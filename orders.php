<?php
include('includes/header.php');
?>
<style>
.shipment-module {
    max-width: 1000px;
    margin: 3rem auto;
    padding: 2rem;
    background: rgba(255, 255, 255, 0.06);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    animation: fadeInUp 1s ease;
    color: #f8fafc;
}

.module-title,
.table-title {
    text-align: center;
    margin-bottom: 2rem;
    font-size: 2rem;
    color: #38bdf8;
}

.shipment-form {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2.5rem;
}

.input-group {
    position: relative;
}

.input-group input {
    width: 100%;
    padding: 1rem 0.75rem;
    border: none;
    border-bottom: 2px solid #38bdf8;
    background: transparent;
    color: rgb(58, 89, 103);
    font-size: 1rem;
    transition: all 0.3s ease;
}

.input-group label {
    position: absolute;
    top: 50%;
    left: 0.75rem;
    transform: translateY(-50%);
    color: #94a3b8;
    pointer-events: none;
    transition: 0.3s ease;
}

.input-group input:focus,
.input-group input:not(:placeholder-shown) {
    border-color: #0ea5e9;
}

.input-group input:focus + label,
.input-group input:not(:placeholder-shown) + label {
    top: 0;
    font-size: 0.75rem;
    color: #0ea5e9;
}

.submit-btn {
    grid-column: span 3;
    background: linear-gradient(90deg, #0ea5e9, #38bdf8);
    border: none;
    padding: 1rem 2rem;
    border-radius: 10px;
    color: white;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
}

.submit-btn:hover {
    background: #0ea5e9;
    transform: scale(1.05);
    box-shadow: 0 5px 20px rgba(14, 165, 233, 0.5);
}

.table-container {
    overflow-x: auto;
}

.shipments-table {
    width: 100%;
    border-collapse: collapse;
    background: rgba(15, 23, 42, 0.7);
    border-radius: 10px;
    overflow: hidden;
}

.shipments-table th,
.shipments-table td {
    padding: 1rem;
    text-align: center;
    border-bottom: 1px solid #334155;
    color: #e2e8f0;
}

.shipments-table th {
    background-color: #1e293b;
    font-weight: 600;
}

.shipments-table tr:hover {
    background-color: #0f172a;
    transition: background-color 0.3s ease;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.orders-module {
    max-width: 1000px;
    margin: 3rem auto;
    padding: 2rem;
    background: rgba(255, 255, 255, 0.06);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    animation: fadeInUp 1s ease;
    color: #f8fafc;
}

.orders-module .module-title {
    text-align: center;
    font-size: 2rem;
    color: #a78bfa;
    margin-bottom: 2rem;
}

.table-container {
    overflow-x: auto;
}

.orders-table {
    width: 100%;
    border-collapse: collapse;
    background: rgba(15, 23, 42, 0.7);
    border-radius: 10px;
    overflow: hidden;
}

.orders-table th,
.orders-table td {
    padding: 1rem;
    text-align: center;
    border-bottom: 1px solid #334155;
    color: #e2e8f0;
}

.orders-table th {
    background-color: #312e81;
    font-weight: 600;
    color: #fef9ff;
}

.orders-table tr:hover {
    background-color: #1e1b4b;
    transition: background-color 0.3s ease;
}

    </style>
<?php
include('config/db.php');

$query = 'SELECT * FROM orders';
$result = mysqli_query($conn, $query);
$orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<div class="orders-module">
    <h1 class="module-title">🧾 Orders Dashboard</h1>

    <div class="table-container">
        <table class="orders-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?php echo $order['id']; ?></td>
                        <td><?php echo $order['customer_name']; ?></td>
                        <td><?php echo $order['amount']; ?></td>
                        <td><?php echo $order['status']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

