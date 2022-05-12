CREATE TABLE IF NOT EXISTS Transactions (
    transaction_id INT AUTO_INCREMENT PRIMARY KEY,
    account_source INT,
    account_dest INT,
    balance_change DECIMAL(20, 2),
    transaction_type VARCHAR(15),
    memo VARCHAR(100),
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    expected_total DECIMAL(20, 2),
    FOREIGN KEY (account_source) REFERENCES Accounts(id),
    FOREIGN KEY (account_dest) REFERENCES Accounts(id)
)