<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure the body takes full viewport height */
        }

        .content {
            flex: 1; /* Allow content to take available space */
            padding: 20px;
            background: #f8f9fa; /* Light background for content */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .footer {
            background-color: #343a40; /* Dark background */
            color: #fff; /* Light text */
            text-align: center;
            padding: 20px 0;
        }

        .footer p {
            margin: 5px 0;
            font-size: 16px;
            letter-spacing: 1px;
        }

        .footer .social-links {
            margin-top: 10px;
        }

        .footer .social-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .footer .social-links a:hover {
            color: #007bff; /* Change color on hover */
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .footer p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    
    <div class="footer">
        <p>
            Thank you for visiting Idiscuss Coding Forum!
        </p>
        <p>
            Join our community to share knowledge, ask questions, and connect with fellow coders.
        </p>
        <div class="social-links">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">LinkedIn</a>
            <a href="#">GitHub</a>
        </div>
        <p>
            Copyright &copy; Idiscuss Coding Forum 2024 || All Rights Reserved
        </p>
    </div>

</body>
</html>
