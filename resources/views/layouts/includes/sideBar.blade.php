<nav class="active" id="sidebar">
    <ul class="list-unstyled lead">
        <li class="active">
            <a href=""><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
            <a href="">Orders</a>
        </li>
        <li>
            <a href="">Transactions</a>
        </li>
        <li>
            <a href="">Products</a>
        </li>
    </ul>
</nav>

<style>
    #sidebar ul li a:hover {
        color: #fff;
        background: #008B8B;
        text-decoration: none !important;

    }

    #ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: #008B8B;
    }

    #sidebar ul.lead {
        border-bottom: 2px solid gainsboro;
        width: fit-content;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        width: 30vh;
        color: #0008B8B;
        display: block;
    }

    #sidebar ul li a i {
        margin-right: 10px;
    }
</style>
