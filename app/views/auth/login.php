<?php include './'; ?>

<div class="login-container">
    <h2>تسجيل الدخول</h2>
    
    <?php if(isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="/auth/login" method="POST">
        <input type="email" name="email" placeholder="البريد الإلكتروني" required>
        <input type="password" name="password" placeholder="كلمة المرور" required>
        <button type="submit">دخول</button>
    </form>
</div>

<?php include '../views/layout/footer.php'; ?>