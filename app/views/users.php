<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Users Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            padding: 40px 20px;
            color: #1e293b;
        }

        .dashboard {
            max-width: 1150px;
            margin: auto;
        }

        /* TOP HEADER */
        .top-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            color: white;
        }

        .title-section h1 {
            font-size: 32px;
            margin-bottom: 7px;
        }

        .title-section p {
            color: #cbd5e1;
            font-size: 15px;
        }

        .user-icon {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: rgba(255,255,255,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            border: 1px solid rgba(255,255,255,0.25);
        }

        /* STAT CARD */
        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 22px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 18px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .stat-icon {
            width: 55px;
            height: 55px;
            border-radius: 12px;
            background: #dbeafe;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .stat-info span {
            display: block;
            color: #64748b;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .stat-info strong {
            font-size: 25px;
            color: #0f172a;
        }

        /* TABLE CARD */
        .table-card {
            background: white;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .table-header h2 {
            font-size: 21px;
            color: #0f172a;
        }

        .status {
            background: #dcfce7;
            color: #15803d;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 750px;
        }

        th {
            background: #f1f5f9;
            color: #475569;
            padding: 15px;
            text-align: left;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        td {
            padding: 16px 15px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 14px;
        }

        tbody tr {
            transition: 0.2s ease;
        }

        tbody tr:hover {
            background: #f8fafc;
            transform: scale(1.005);
        }

        /* USER NAME */
        .name {
            font-weight: bold;
            color: #0f172a;
        }

        /* ID */
        .id-badge {
            background: #eff6ff;
            color: #2563eb;
            padding: 6px 10px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 12px;
        }

        /* USERNAME */
        .username {
            background: #f1f5f9;
            padding: 7px 10px;
            border-radius: 7px;
            color: #334155;
            font-weight: 600;
            font-size: 12px;
        }

        .email {
            color: #64748b;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            color: #cbd5e1;
            font-size: 12px;
            margin-top: 20px;
        }

        /* MOBILE */
        @media (max-width: 650px) {

            body {
                padding: 25px 12px;
            }

            .top-section {
                align-items: flex-start;
            }

            .title-section h1 {
                font-size: 25px;
            }

            .table-card {
                padding: 18px;
            }

            .user-icon {
                width: 45px;
                height: 45px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>

<div class="dashboard">

    <!-- HEADER -->
    <div class="top-section">

        <div class="title-section">
            <h1>Users Dashboard</h1>
            <p>Manage and view registered users</p>
        </div>

        <div class="user-icon">
            👤
        </div>

    </div>


    <!-- TOTAL USERS -->
    <div class="stat-card">

        <div class="stat-icon">
            👥
        </div>

        <div class="stat-info">
            <span>Total Registered Users</span>

            <strong><?= count($users) ?></strong>
        </div>

    </div>


    <!-- USERS TABLE -->
    <div class="table-card">

        <div class="table-header">

            <h2>Registered Users</h2>

            <span class="status">
                ● Active
            </span>

        </div>


        <div class="table-container">

            <table>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Username</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($users as $user): ?>

                    <tr>

                        <td>
                            <span class="id-badge">
                                #<?= $user['id'] ?>
                            </span>
                        </td>

                        <td class="name">
                            <?= $user['firstname'] ?>
                        </td>

                        <td class="name">
                            <?= $user['lastname'] ?>
                        </td>

                        <td class="email">
                            <?= $user['email'] ?>
                        </td>

                        <td>
                            <span class="username">
                                <?= $user['username'] ?>
                            </span>
                        </td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>


    <div class="footer">
        LavaLust Users Management System
    </div>

</div>

</body>
</html>