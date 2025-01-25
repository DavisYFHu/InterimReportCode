<section class="index-login">
    <div class="wrapper">
        <div class="signup-container">
            <div class="logo-container">
                <img src="images/logo.png" alt="University Logo" class="university-logo">
            </div>
            <h4>SIGN UP</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="includes/signup.inc.php" method="post" class="signup-form">
                <div class="form-group">
                    <input type="text" name="uid" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="pwdrepeat" placeholder="Confirm Password" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="form-group verification-group">
                    <div class="verification-input">
                        <input type="text" name="verification" placeholder="Verification Code" required>
                        <button type="button" class="get-code-btn">Get Code</button>
                    </div>
                </div>
                <div class="policy-text">
                    After a successful sign in, we use cookies in your browser to track your session. By signing in, you agree to our
                    <a href="#" class="policy-link">Privacy Policy.</a>
                </div>
                <div class="form-actions">
                    <button type="submit" name="submit" class="signup-btn">SIGN UP</button>
                </div>
            </form>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&display=swap');

        * {
            font-family: 'Noto Sans', sans-serif;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        .signup-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .university-logo {
            max-width: 300px;
            height: auto;
        }

        .signup-container h4 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
            text-align: center;
            font-weight: 600;
        }

        .signup-container p {
            color: #666;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 400;
        }

        .signup-form .form-group {
            margin-bottom: 20px;
        }

        .signup-form input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }

        .signup-form input:focus {
            border-color: #007B5E;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 94, 0.2);
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #666;
            font-size: 14px;
        }

        .remember-me input[type="checkbox"] {
            width: auto;
            margin: 0;
        }

        .policy-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .policy-link {
            color: #007B5E;
            text-decoration: none;
            font-weight: 500;
        }

        .policy-link:hover {
            text-decoration: underline;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .signup-btn {
            padding: 12px 30px;
            background-color: #007B5E;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .signup-btn:hover {
            background-color: #006348;
        }
    .verification-group {
        margin: 10px 0;
    }
    
    .verification-input {
        display: flex;
        gap: 10px;
    }
    
    .verification-input input {
        flex: 1;
    }
    
    .get-code-btn {
        padding: 8px 15px;
        background-color: #007B5E;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        white-space: nowrap;
    }
    
    .get-code-btn:hover {
        background-color: #007B5E;
    }

        @media (max-width: 480px) {
            .signup-container {
                padding: 20px;
                margin: 20px;
            }

            .signup-form input {
                padding: 10px;
            }

            .university-logo {
                max-width: 200px;
            }

            .policy-text {
                font-size: 13px;
            }
        }
    </style>
</section>
<script>
document.querySelector('.get-code-btn').addEventListener('click', async function() {
    const email = document.querySelector('input[name="email"]').value;
    if (!email) {
        alert('Please enter email first');
        return;
    }
    
    try {
        const response = await fetch('send_code.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email: email })
        });
        
        const data = await response.json();
        if (data.success) {
            alert('Verification code has been sent to your email');
        } else {
            alert('Failed to send verification code');
        }
    } catch (error) {
        alert('Error occurred while sending verification code');
    }
});
document.querySelector('.get-code-btn').addEventListener('click', async function() {
    const button = this;
    const email = document.querySelector('input[name="email"]').value;
    
    if (!email) {
        alert('Please enter email first');
        return;
    }

    
    button.disabled = true;
    button.textContent = 'Sending...';
    
    try {
        const response = await fetch('send_code.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email: email })
        });
        
        const data = await response.json();
        if (data.success) {
            alert('Verification code has been sent to your email');
            
            let countdown = 60;
            const timer = setInterval(() => {
                button.textContent = `Resend (${countdown}s)`;
                countdown--;
                if (countdown < 0) {
                    clearInterval(timer);
                    button.disabled = false;
                    button.textContent = 'Get Code';
                }
            }, 1000);
        } else {
            alert('Failed to send verification code: ' + data.message);
            button.disabled = false;
            button.textContent = 'Get Code';
        }
    } catch (error) {
        alert('Error occurred while sending verification code');
        button.disabled = false;
        button.textContent = 'Get Code';
    }
});
</script>
