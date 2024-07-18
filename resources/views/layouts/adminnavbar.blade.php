<style>
    .header {
        background-color: #FF0000;
        color: white;
        padding: 1% 2%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .header .left-section {
        display: flex;
        align-items: center;
        padding: 10px;
        gap: 20px;
    }
    .company-logo {
        height: 35px;
        margin-right: auto;
    }
    .icons {
        display: flex;
        gap: 20px;
    }
    .icon {
        font-size: 24px;
        cursor: pointer;
    }
    .icon:hover {
        color: #007bff;
    }
    .header .right-section {
        display: flex;
        align-items: center;
    }
</style>

<div class="header">
    <div class="left-section">
        <img src="{{ asset('images/companylogo.jpg') }}" alt="Logo" class="company-logo">
        <div class="icons">
            <i class="bi bi-bell-fill icon" alt="Notifications"></i>
            <i class="bi bi-gear-fill icon" alt="Settings"></i>
        </div>
    </div>
    <div class="right-section">
        <button class="btn btn-light ml-3">Logout</button>
    </div>
</div>

@yield('admindashboard')