# MindEase-A-Mental-Health-Companion
MindEase is a web-based mental wellness application.It features an interactive mental health quiz to gauge emotional well-being, a curated library of self-help books, and a supportive chatbot designed to guide users through their wellness journey. Built with HTML (frontend) and PHP (backend), and developed locally using the Laragon environment.

# 🚀 Getting Started with MindEase

Follow these steps to set up and run **MindEase – A Mental Health Companion** on your local system using **Laragon**.

---

## 🛠️ Installation & Setup

1. **Install Laragon**
Download and install any version of **Laragon**.  
**Recommended:** Use **version 6.0.0**, as it does not prompt for a license.

---

2. **Install phpMyAdmin via Laragon**
After installing Laragon:

- Open the **Laragon Menu**
- Navigate to **Tools → Quick Add → phpMyAdmin**

---

3. **Replace the `www` Directory**
- Replace Laragon’s default `www` folder with the provided project folder from this GitHub repository.

---

4. **Configure the Database**

1. Open your preferred browser and go to:  
   `http://localhost/phpmyadmin`

2. **Login Credentials:**  
   - **Username:** `root`  
   - **Password:** *(leave it blank)*

3. Create a **new database** called: quiz

4. Import the `.sql` file provided in the repository into the `quiz` database.

5. **Restart Laragon**
Restart Laragon so it can detect the new project files automatically.

 6. **Run the Project**
- Launch Laragon
- Open the project from the Laragon menu or directly via: http://localhost/your-project-folder


> ✅ You're all set! Explore the features, test the mental health quiz, and interact with the chatbot.


## 💬 Need Help?
Feel free to open an issue in this repository if you face any setup issues or bugs.
