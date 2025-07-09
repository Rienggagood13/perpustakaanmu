import React from 'react';

export default function GuestLayout({ children }) {
    return (
        <html lang="en">
            <head>
                <meta charSet="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Book Rent Kalcer</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
                <style>{`
                    body {
                        background: linear-gradient(135deg, rgb(118, 119, 45), rgb(55, 37, 122), rgb(135, 135, 141), rgb(50, 151, 72));
                        height: 100vh;
                        margin: 0;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    }

                    .auth-box {
                        background: #ffffff;
                        padding: 2rem;
                        border-radius: 15px;
                        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                        width: 100%;
                        max-width: 400px;
                        margin-top: 60px;
                    }

                    .book-logo {
                        border-radius: 50%;
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
                        background-color: rgb(12, 72, 100);
                        padding: 5px;
                    }

                    .custom-header {
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        color: white;
                        background-color: rgba(0,0,0,0.3);
                        text-align: center;
                        padding: 10px 0;
                        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
                        font-family: 'Georgia', serif;
                        z-index: 1000;
                    }

                    .footer {
                        margin-top: 40px;
                        padding: 10px 0;
                        font-size: 14px;
                        color: #070606;
                        text-align: center;
                        position: fixed;
                        bottom: 0;
                        width: 100%;
                    }
                `}</style>
            </head>
            <body>
                <header className="custom-header">
                    <h1>Perpustakaan Kita</h1>
                </header>

                <div className="auth-box">
                    <div className="text-center mb-3">
                        <img src="https://cdn.pixabay.com/photo/2021/05/16/17/10/books-6258698_1280.jpg" alt="Buku" width="100" className="book-logo mb-2" />
                    </div>
                    {children}
                </div>

                <footer className="footer">
                    &copy; 2025 Riengga.
                </footer>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
            </body>
        </html>
    );
}
