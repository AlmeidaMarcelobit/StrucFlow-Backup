<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> <!-- Importação da fonte Roboto -->
    <link rel="stylesheet" href="../css/styles-colaboradores.css">
    <title>Inventário de Colaboradores</title>
</head>

<body>
    <!-- Header com Menu -->
    <header>
        <nav>
            <a href="pages/colaboradores.php">Colaboradores</a>
            <div class="menu-dropdown">
                <a href="#">Estoques</a>
                <div class="dropdown-content">
                    <a href="#kits">Kits</a>
                    <a href="#monitor">Monitor</a>
                    <a href="#computadores">Computadores</a>
                    <a href="#celulares">Celulares</a>
                    <a href="#fones">Fones</a>
                    <a href="#danificados">Danificados</a>
                </div>
            </div>
            <a href="#centro-custo">Centro de Custo</a>
            <a href="#status-sistemas">Status - Sistemas</a>
        </nav>
    </header>

    <h2 style="text-align:center; margin-top: 10px;">📋 Inventário de Colaboradores</h2>

    <div class="container">
        <div class="card">
            <img src="foto_joao.jpg" alt="Foto de João Silva" class="profile-pic">
            <h3>👤 João Silva</h3>
            <p><strong>Cargo:</strong> Analista</p>
            <p><strong>Centro de Custo:</strong> TI</p>
            <p><strong>Data de Admissão:</strong> 01/01/2024</p>
            <p><span class="status ativo">Status: Ativo</span></p>

            <div class="devices">
                <div class="device">
                    <h4>💻 Notebook</h4>
                    <p><strong>Patrimônio:</strong> 12345</p>
                    <p><strong>Série:</strong> A1B2C3D4</p>
                    <p><strong>Modelo:</strong> Dell Inspiron</p>
                </div>

                <div class="device">
                    <h4>📱 Celular</h4>
                    <p><strong>Patrimônio:</strong> 67890</p>
                    <p><strong>Série:</strong> Z9Y8X7W6</p>
                    <p><strong>Modelo:</strong> iPhone 13</p>
                </div>

                <div class="device">
                    <h4>⌨️ Teclado</h4>
                    <p><strong>Patrimônio:</strong> 98765</p>
                    <p><strong>Série:</strong> K1L2M3N4</p>
                </div>

                <div class="device">
                    <h4>🖥️ Monitor</h4>
                    <p><strong>Patrimônio:</strong> 11223</p>
                    <p><strong>Série:</strong> M4N5O6P7</p>
                    <p><strong>Modelo:</strong> LG Ultrawide</p>
                </div>

                <div class="device">
                    <h4>🔩 Suporte de Alumínio para Notebook</h4>
                    <p><strong>Patrimônio:</strong> 33445</p>
                    <p><strong>Série:</strong> S8T9U0V1</p>
                    <p><strong>Modelo:</strong> Ergostand Pro</p>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="foto_maria.jpg" alt="Foto de Maria Souza" class="profile-pic">
            <h3>👤 Maria Souza</h3>
            <p><strong>Cargo:</strong> Gerente</p>
            <p><strong>Centro de Custo:</strong> Financeiro</p>
            <p><strong>Data de Admissão:</strong> 15/03/2020</p>
            <p><span class="status desativado">Status: Desativado</span></p>

            <div class="devices">
                <div class="device">
                    <h4>💻 Notebook</h4>
                    <p><strong>Patrimônio:</strong> 54321</p>
                    <p><strong>Série:</strong> X9Y8Z7A6</p>
                    <p><strong>Modelo:</strong> HP Elitebook</p>
                </div>

                <div class="device">
                    <h4>📱 Celular</h4>
                    <p><strong>Patrimônio:</strong> 11223</p>
                    <p><strong>Série:</strong> F5G4H3I2</p>
                    <p><strong>Modelo:</strong> Samsung Galaxy S21</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Inventário de Colaboradores - Todos os direitos reservados.</p>
    </footer>

</body>

</html>
