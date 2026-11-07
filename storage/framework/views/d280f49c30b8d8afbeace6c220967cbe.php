<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Kop(i) Des(i)'); ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f6efe7;
            color: #3b2a20;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            max-width: 960px;
            width: 100%;
            margin: 0 auto;
            padding: 30px 20px;
            flex: 1;
        }

        h1, h2 {
            margin-bottom: 12px;
        }

        .card {
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(59, 42, 32, 0.1);
        }

        .btn {
            display: inline-block;
            background-color: #6f4e37;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .btn:hover {
            background-color: #4e3524;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px;
            border: 1px solid #cdb9a6;
            border-radius: 8px;
            font-size: 1rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #eadfd3;
        }

        th {
            background-color: #6f4e37;
            color: #ffffff;
        }

        .table-wrap {
            overflow-x: auto;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
            margin-top: 16px;
        }
    </style>
</head>
<body>

    <?php echo $__env->make('components.navbar', ['username' => $username ?? ''], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html><?php /**PATH C:\Users\deswanti\Documents\UTS_PWEB_252410102033\resources\views/layouts/app.blade.php ENDPATH**/ ?>