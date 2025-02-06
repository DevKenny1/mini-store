<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Super Admin</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-zinc-200 flex items-center justify-center h-screen p-4">
    <form action="<?php echo BASE_URL('admin/register_super_admin_handler') ?>" method="post"
        class="bg-zinc-50 w-lg max-w-full p-6 rounded-md flex flex-col gap-2">
        <div class="text-center mb-2">
            <h1 class="text-2xl font-bold">Create Super Admin</h1>
            <small class="text-red-500">Super admin account is required.</small>
        </div>

        <div class="flex flex-col">
            <label for="first_name">First name</label>
            <input class="border border-zinc-900 p-1" type="text" placeholder="Enter first name" id="first_name"
                name="first_name" value="<?php echo set_value("first_name") ?>">
            <small class="text-red-500"><?php echo form_error("first_name") ?></small>
        </div>

        <div class="flex flex-col">
            <label for="last_name">Last name</label>
            <input class="border border-zinc-900 p-1" type="text" placeholder="Enter last name" id="last_name"
                name="last_name" value="<?php echo set_value("last_name") ?>">
            <small class="text-red-500"><?php echo form_error("last_name") ?></small>
        </div>

        <div class="flex flex-col">
            <label for="username">Username</label>
            <input class="border border-zinc-900 p-1" type="text" placeholder="Enter username" id="username"
                name="username" value="<?php echo set_value("username") ?>">
            <small class="text-red-500"><?php echo form_error("username") ?></small>
        </div>

        <div class="flex flex-col">
            <label for="password">Password</label>
            <input class="border border-zinc-900 p-1" type="password" placeholder="Enter password" id="password"
                name="password" value="<?php echo set_value("password") ?>">
            <small class="text-red-500"><?php echo form_error("password") ?></small>
        </div>

        <div class="flex flex-col">
            <label for="confirm_password">Verify password</label>
            <input class="border border-zinc-900 p-1" type="password" placeholder="Confirm password"
                id="confirm_password" name="confirm_password" value="<?php echo set_value("confirm_password") ?>">
            <small class="text-red-500"><?php echo form_error("confirm_password") ?></small>
        </div>

        <button
            class="bg-blue-500 text-zinc-50 w-full mt-2 py-1 font-bold cursor-pointer hover:bg-blue-600">Create</button>
    </form>
</body>

</html>