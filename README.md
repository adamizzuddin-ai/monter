# Monter — Secure Asset Inventory Management Application

## 1. Project Description
**Monter** is a production-ready, multi-tenant Asset Inventory Management application engineered to meet the strict security guidelines of the UniKL MIIT Secure Software Development (IKB 21503) course baseline. The application is architecture-hardened against systemic vulnerabilities, aligning with the OWASP Top 10 guidelines and OWASP Application Security Verification Standard (ASVS) v4.0.3 Level 1 controls. Built using the Laravel 11 framework, Monter utilizes a robust MVC design pattern, integrated Blade template layouts, and Vite compiling to achieve reliable, high-performance secure operation.

---

## 2. Installation Steps
Execute this exact setup sequence to initialize the project environment locally:

1. **Clone the Project Repository**
   ```bash
   git clone https://github.com
   cd SSD-Project
   ```

2. **Install PHP Platform Requirements**
   Pull the verified production backend libraries using the package utility:
   ```bash
   composer install
   ```

3. **Install Frontend Package Nodes**
   Retrieve client-side script structures required by the application layout:
   ```bash
   npm install
   ```

4. **Initialize Local App Environment**
   Duplicate the sanitized setup template to instantiate local operational constants:
   ```bash
   cp .env.example .env
   ```

5. **Generate Application Secure Cryptographic Key**
   Establish the unique framework encryption string required for secure session masking:
   ```bash
   php artisan key:generate
   ```

6. **Initialize Secure Data Schemas**
   Configure local database credentials inside your `.env` configuration file, then execute migrations:
   ```bash
   php artisan migrate
   ```

---

## 3. Security Features Summary
Monter employs a rigorous defense-in-depth security approach implementing the following framework controls:
* **Anti-SQL Injection Mechanisms:** All database transactions utilize Laravel Eloquent ORM parameterized queries with explicit PDO parameter bindings to neutralize raw input command execution.
* **Reflected/Stored XSS Defenses:** Browser layouts isolate and escape user strings through native double-curly Blade bracing (`{{ }}`), mapping characters directly to `htmlspecialchars()` filters.
* **Automated CSRF Token Interception:** Critical state-changing web data forms mandate `@csrf` token directive insertion, verifying requests remain isolated within valid user contexts.
* **Argon2id Cryptographic Hashing:** User application password states are encrypted utilizing memory-hard Argon2id hash profiles to completely obstruct offline GPU dictionary attacks.
* **Isolated File Upload Protocols:** Media upload handling strips original file naming states, re-maps names onto a random UUIDv4 string, and retains records outside the public root.

---

## 5. Dependencies
The ecosystem operationally dictates the following primary operational runtimes:
* **Backend Platform:** PHP Core Runtime >= 8.2
* **Application Framework:** Laravel Framework 11.x
* **Package Utility:** Composer Dependency Tracker
* **Frontend Workflow Engine:** Node.js & NPM Lifecycle Tools
* **Asset Compiler:** Vite Packaging Tooling

---

## 6. Screenshot(s) of System
*(The visual overview layout capturing the interface state of the project system will be displayed here once uploaded).*
