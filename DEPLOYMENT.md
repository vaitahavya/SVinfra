# Deployment Guide - SV Infra Developers Website

## 🚀 Quick Deployment Steps

### 1. Local Testing
```bash
# Navigate to project directory
cd sv

# Start PHP development server
php -S localhost:8000

# Open browser and visit
# http://localhost:8000
```

### 2. Production Deployment

#### Option A: Shared Hosting (cPanel, etc.)
1. **Upload Files**: Upload all project files to your web hosting directory
2. **Set Permissions**: Ensure PHP files have 644 permissions
3. **Configure Email**: Update contact form email settings in `index.php`
4. **Add Images**: Upload company images to `assets/images/` directory
5. **Test**: Visit your domain to ensure everything works

#### Option B: VPS/Dedicated Server
1. **Install Web Server**: Apache or Nginx with PHP support
2. **Upload Files**: Use SFTP/SCP to upload project files
3. **Configure Virtual Host**: Set up domain pointing to project directory
4. **SSL Certificate**: Install SSL certificate for HTTPS
5. **Configure Email**: Set up SMTP for contact form
6. **Test**: Verify all functionality works correctly

### 3. Domain Configuration

#### DNS Settings
- **A Record**: Point domain to server IP
- **CNAME**: Set up www subdomain
- **MX Record**: Configure email if using custom domain email

#### SSL Certificate
- Install SSL certificate (Let's Encrypt recommended)
- Enable HTTPS redirect in `.htaccess`
- Update Google Maps embed URL to use HTTPS

### 4. Email Configuration

#### Contact Form Setup
1. **Update Recipient Email** in `index.php`:
   ```php
   $to = 'info@svinfra.com'; // Your email address
   ```

2. **SMTP Configuration** (Recommended):
   - Use PHPMailer for better email delivery
   - Configure SMTP settings in your hosting panel
   - Test email functionality

#### Alternative: Form Submission Services
- **Formspree**: Free form handling service
- **Netlify Forms**: If hosting on Netlify
- **Google Forms**: Simple alternative

### 5. Image Optimization

#### Required Images
1. **logo.png** - Company logo (200x50px)
2. **sv-resorts.jpg** - Project image (800x600px)
3. **sv-enclave.jpg** - Project image (800x600px)
4. **sridhar-rao.jpg** - Team photo (400x400px)
5. **vamshidhar-reddy.jpg** - Team photo (400x400px)

#### Optimization Tips
- Use WebP format for better performance
- Compress images without losing quality
- Use appropriate alt text for SEO
- Consider lazy loading for larger images

### 6. SEO Setup

#### Meta Tags
- Update meta description and keywords
- Add Open Graph tags for social sharing
- Configure Twitter Card meta tags

#### Google Analytics
- Add Google Analytics tracking code
- Set up conversion tracking for contact form
- Configure goals and events

#### Google Search Console
- Submit sitemap (if created)
- Monitor search performance
- Fix any indexing issues

### 7. Performance Optimization

#### Server Configuration
- Enable GZIP compression
- Configure browser caching
- Optimize PHP settings

#### Code Optimization
- Minify CSS and JavaScript files
- Optimize images
- Use CDN for external libraries

### 8. Security Measures

#### File Permissions
```bash
# Set correct permissions
chmod 644 *.php
chmod 644 assets/css/*
chmod 644 assets/js/*
chmod 755 assets/images/
```

#### Security Headers
- Already configured in `.htaccess`
- Monitor for security vulnerabilities
- Keep PHP and server software updated

### 9. Testing Checklist

#### Functionality
- [ ] Website loads correctly
- [ ] Navigation works on all devices
- [ ] Contact form submits successfully
- [ ] All links work properly
- [ ] Images display correctly
- [ ] Responsive design works

#### Performance
- [ ] Page load speed is acceptable
- [ ] Images are optimized
- [ ] CSS/JS files are minified
- [ ] Caching is working

#### SEO
- [ ] Meta tags are properly set
- [ ] Google Analytics is tracking
- [ ] Sitemap is submitted
- [ ] Robots.txt is configured

### 10. Maintenance

#### Regular Tasks
- Monitor website performance
- Update content as needed
- Check for broken links
- Review analytics data
- Backup website files

#### Updates
- Keep PHP version updated
- Update external libraries
- Monitor security advisories
- Test after any changes

## 🆘 Troubleshooting

### Common Issues

#### Contact Form Not Working
- Check PHP mail() function is enabled
- Verify email settings in hosting panel
- Test with SMTP configuration

#### Images Not Loading
- Check file permissions
- Verify image paths are correct
- Ensure images are uploaded to correct directory

#### Mobile Responsiveness Issues
- Test on actual devices
- Check CSS media queries
- Verify viewport meta tag

#### Performance Issues
- Optimize images
- Enable caching
- Use CDN for external resources
- Monitor server resources

## 📞 Support

For deployment assistance or technical support, please contact the development team.

---

**Deployment completed successfully! 🎉**
