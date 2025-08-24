# SV Infra Projects - Single Page Website

A modern, responsive single-page website for SV Infra Projects, showcasing their real estate projects and company information.

## 🏗️ Project Overview

This is a professional single-page website built for SV Infra Projects Pvt Ltd, a real estate development company based in Hyderabad, Telangana. The website is designed to attract potential buyers and investors by showcasing the company's projects, mission, and contact information.

## ✨ Features

- **Responsive Design**: Fully responsive layout that works on all devices
- **Modern UI/UX**: Clean, professional design with smooth animations
- **SEO Optimized**: Meta tags, structured data, and semantic HTML
- **Contact Form**: PHP-powered contact form with validation
- **Interactive Elements**: Smooth scrolling, animations, and hover effects
- **Performance Optimized**: Lazy loading, optimized images, and efficient code

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Framework**: Bootstrap 5.3.0
- **Icons**: Font Awesome 6.4.0
- **Fonts**: Google Fonts (Poppins)
- **Backend**: PHP (for contact form)
- **Images**: Optimized real estate images

## ✅ **Project Status: COMPLETE**

**All files uploaded and website is fully functional!**

- ✅ All images uploaded and displaying
- ✅ All PDF brochures uploaded and downloadable
- ✅ All layout PDFs uploaded and viewable
- ✅ Contact form functional
- ✅ Responsive design working
- ✅ "View Layout" buttons working
- ✅ "Download Brochure" buttons working

## 📁 Project Structure

```
sv/
├── index.php                 # Main website file
├── index.html                # HTML version
├── assets/
│   ├── css/
│   │   └── style.css        # Custom styles
│   ├── js/
│   │   └── script.js        # JavaScript functionality
│   └── images/              # Website images (✅ All uploaded)
│       ├── logo.png         # Company logo (240KB)
│       ├── sv-resorts.jpg   # SV Resorts project image (311KB)
│       ├── sv-enclave.jpg   # SV Enclave project image (263KB)
│       ├── sridhar-rao.jpg  # Team member photo (45KB)
│       └── vamshidhar-reddy.jpg # Team member photo (1.9MB)
├── brochures/               # PDF files (✅ All uploaded)
│   ├── sv-resorts-brochure.pdf    # Project brochure (392KB)
│   ├── sv-enclave-brochure.pdf    # Project brochure (451KB)
│   ├── sv-resorts-layout.pdf      # Layout plan (2.1MB)
│   └── sv-enclave-layout.pdf      # Layout plan (3.1MB)
├── privacy-policy.html      # Privacy policy page
├── UPLOAD_GUIDE.md          # Upload instructions
├── IMAGE_UPDATE_GUIDE.md    # Image update guide
├── DEPLOYMENT.md            # Deployment guide
└── README.md               # Project documentation
```

## 🚀 Getting Started

### Prerequisites

- Web server with PHP support (Apache, Nginx, or built-in PHP server)
- Modern web browser

### Installation

1. **Clone or download** the project files to your web server directory
2. **All images and PDFs are already uploaded** and ready to use
2. **Configure your web server** to serve PHP files
3. **Update contact form settings** in `index.php` if needed
4. **Add your images** to the `assets/images/` directory
5. **Customize content** as per your requirements

### Local Development

To run the website locally using PHP's built-in server:

```bash
# Navigate to project directory
cd sv

# Start PHP development server
php -S localhost:8000

# Open browser and visit
# http://localhost:8000
```

## 📱 Website Sections

### 1. Header/Navigation
- Sticky navigation bar
- Company logo and branding
- Navigation menu (About Us, Projects, Contact)
- Social media icons

### 2. Hero Section
- Full-width background image
- Compelling headline and tagline
- Call-to-action button

### 3. About Us
- Company description and mission
- Vision statement
- Core values with icons

### 4. Projects
- SV Resorts Project details
- SV Enclave Project details
- Location highlights and amenities
- Download brochures and contact CTAs

### 5. Team
- Managing Directors profiles
- Professional photos and titles

### 6. Contact
- Company address and contact details
- Google Maps integration
- Contact form with PHP validation
- Email functionality

### 7. Footer
- Copyright information
- Quick links
- Social media icons

## 🎨 Customization

### Colors
The website uses CSS custom properties for easy color customization. Edit the `:root` section in `assets/css/style.css`:

```css
:root {
    --primary-color: #1e3a8a;    /* Main brand color */
    --secondary-color: #3b82f6;  /* Secondary color */
    --accent-color: #f59e0b;     /* Accent color */
    /* ... other colors */
}
```

### Content
- Update company information in `index.php`
- Replace placeholder images with actual project photos
- Modify contact details and social media links
- Customize form validation rules in `assets/js/script.js`

### Styling
- Modify `assets/css/style.css` for design changes
- Add custom animations in the CSS file
- Update responsive breakpoints as needed

## 📧 Contact Form Configuration

The contact form uses PHP's `mail()` function. To configure:

1. **Email Settings**: Update the recipient email in `index.php`:
   ```php
   $to = 'info@svinfra.com'; // Change to your email
   ```

2. **SMTP Configuration**: For better email delivery, consider using PHPMailer or configuring SMTP settings in your server.

3. **Form Validation**: Customize validation rules in `assets/js/script.js`

## 🔧 Performance Optimization

### Images
- Use optimized images (WebP format recommended)
- Implement lazy loading for better performance
- Compress images without losing quality

### Code
- Minify CSS and JavaScript for production
- Enable GZIP compression on your server
- Use CDN for external libraries

### SEO
- Update meta tags with your specific keywords
- Add structured data markup
- Optimize page load speed

## 📱 Responsive Design

The website is fully responsive and optimized for:
- Desktop (1200px+)
- Tablet (768px - 1199px)
- Mobile (320px - 767px)

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## 📄 License

This project is created for SV Infra Projects. All rights reserved.

## 🤝 Support

For technical support or customization requests, please contact the development team.

## 📝 Changelog

### Version 1.0.0 (2025-01-XX)
- Initial release
- Complete website with all sections
- Responsive design
- Contact form functionality
- SEO optimization

---

**Built with ❤️ for SV Infra Projects**
