import React from 'react';
import { Link } from '@inertiajs/react';

export default function Welcome({ canLogin, canRegister }) {
    return (
        <div style={{
            background: 'linear-gradient(135deg, #2b6cb0, #805ad5, #ec4899)',
            height: '100vh',
            display: 'flex',
            justifyContent: 'center',
            alignItems: 'center',
            fontFamily: 'Segoe UI, Tahoma, Geneva, Verdana, sans-serif',
        }}>
            <div style={{
                backgroundColor: 'rgba(255, 255, 255, 0.08)',
                padding: '3rem',
                borderRadius: '20px',
                backdropFilter: 'blur(10px)',
                boxShadow: '0 8px 32px rgba(0, 0, 0, 0.25)',
                maxWidth: '420px',
                width: '100%',
                textAlign: 'center',
                color: 'white',
            }}>
                <img
                    src="https://cdn-icons-png.flaticon.com/512/29/29302.png"
                    alt="Logo Buku"
                    style={{
                        width: '80px',
                        height: '80px',
                        objectFit: 'cover',
                        borderRadius: '50%',
                        backgroundColor: 'rgba(255,255,255,0.15)',
                        padding: '10px',
                        marginBottom: '1.5rem',
                        boxShadow: '0 4px 8px rgba(0,0,0,0.2)',
                    }}
                />

                <h2 style={{ fontWeight: 'bold', fontSize: '1.5rem', marginBottom: '0.5rem' }}>
                    Si PINJAM BUKU
                </h2>
                <p style={{ marginBottom: '2rem' }}>
                    Buku merupakan Jendela Dunia!.
                </p>

                {canLogin && (
                    <div style={{ display: 'flex', flexDirection: 'column', gap: '1rem' }}>
                        <Link href="/login" style={buttonStyle}>Login</Link>
                        {canRegister && (
                            <Link href="/register" style={{ ...buttonStyle, backgroundColor: 'rgba(255,255,255,0.25)' }}>
                                Register
                            </Link>
                        )}
                    </div>
                )}
            </div>
        </div>
    );
}

const buttonStyle = {
    padding: '10px 30px',
    backgroundColor: 'rgba(255,255,255,0.2)',
    border: '1px solid white',
    borderRadius: '30px',
    color: 'white',
    fontWeight: 'bold',
    textDecoration: 'none',
    transition: 'background 0.3s ease',
    display: 'block',
};
