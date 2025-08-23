# Social Media Configuration Guide - SV Infra Developers

## 📱 **Current Social Media Links**

All social media icons are now functional and link to the following platforms:

### 🔗 **Social Media URLs:**

| Platform | URL | Status |
|----------|-----|--------|
| **Instagram** | `https://instagram.com/svinfra` | ✅ Active |
| **Facebook** | `https://facebook.com/svinfra` | ✅ Active |
| **YouTube** | `https://youtube.com/@svinfra` | ✅ Active |
| **Threads** | `https://threads.net/@svinfra` | ✅ Active |
| **X (Twitter)** | `https://x.com/svinfra` | ✅ Active |
| **LinkedIn** | `https://linkedin.com/company/svinfra` | ✅ Active |

## 🎯 **Features Implemented:**

### ✅ **Navigation Bar Icons:**
- **Location**: Top navigation bar (right side)
- **Color**: White text on brown background
- **Hover Effect**: Orange color on hover
- **Target**: Opens in new tab

### ✅ **Footer Icons:**
- **Location**: Footer section (bottom right)
- **Color**: White text on brown background
- **Hover Effect**: Orange color on hover
- **Target**: Opens in new tab

### ✅ **Security Features:**
- **`target="_blank"`**: Opens in new tab
- **`rel="noopener noreferrer"`**: Security best practice
- **Accessibility**: Proper link structure

## 🔧 **How to Update Social Media Links**

### **Option 1: Direct File Editing**

Update the URLs in these files:
- `index.html` (2 locations: navbar + footer)
- `index.php` (2 locations: navbar + footer)
- `index-with-php-form.html` (2 locations: navbar + footer)

### **Option 2: Search and Replace**

Use these search patterns to find and replace:

**For Instagram:**
```html
href="https://instagram.com/svinfra"
```

**For Facebook:**
```html
href="https://facebook.com/svinfra"
```

**For YouTube:**
```html
href="https://youtube.com/@svinfra"
```

**For Threads:**
```html
href="https://threads.net/@svinfra"
```

**For X (Twitter):**
```html
href="https://x.com/svinfra"
```

**For LinkedIn:**
```html
href="https://linkedin.com/company/svinfra"
```

## 📋 **Quick Update Template**

When you need to update social media links, replace the URLs in all files:

```html
<!-- Navigation Bar Social Icons -->
<div class="social-icons d-flex gap-2">
    <a href="YOUR_INSTAGRAM_URL" target="_blank" rel="noopener noreferrer" class="text-white"><i class="fab fa-instagram"></i></a>
    <a href="YOUR_FACEBOOK_URL" target="_blank" rel="noopener noreferrer" class="text-white"><i class="fab fa-facebook"></i></a>
    <a href="YOUR_YOUTUBE_URL" target="_blank" rel="noopener noreferrer" class="text-white"><i class="fab fa-youtube"></i></a>
    <a href="YOUR_THREADS_URL" target="_blank" rel="noopener noreferrer" class="text-white"><i class="fab fa-threads"></i></a>
    <a href="YOUR_X_TWITTER_URL" target="_blank" rel="noopener noreferrer" class="text-white"><i class="fab fa-x-twitter"></i></a>
    <a href="YOUR_LINKEDIN_URL" target="_blank" rel="noopener noreferrer" class="text-white"><i class="fab fa-linkedin"></i></a>
</div>

<!-- Footer Social Icons -->
<div class="social-icons">
    <a href="YOUR_INSTAGRAM_URL" target="_blank" rel="noopener noreferrer" class="text-white me-2"><i class="fab fa-instagram"></i></a>
    <a href="YOUR_FACEBOOK_URL" target="_blank" rel="noopener noreferrer" class="text-white me-2"><i class="fab fa-facebook"></i></a>
    <a href="YOUR_YOUTUBE_URL" target="_blank" rel="noopener noreferrer" class="text-white me-2"><i class="fab fa-youtube"></i></a>
    <a href="YOUR_THREADS_URL" target="_blank" rel="noopener noreferrer" class="text-white me-2"><i class="fab fa-threads"></i></a>
    <a href="YOUR_X_TWITTER_URL" target="_blank" rel="noopener noreferrer" class="text-white me-2"><i class="fab fa-x-twitter"></i></a>
    <a href="YOUR_LINKEDIN_URL" target="_blank" rel="noopener noreferrer" class="text-white"><i class="fab fa-linkedin"></i></a>
</div>
```

## 🎨 **Visual Design:**

### **Color Scheme:**
- **Default**: White icons on brown background
- **Hover**: Orange icons (brand color)
- **Consistent**: Matches overall brand colors

### **Icon Sizes:**
- **Navigation**: 1.2rem (larger for visibility)
- **Footer**: 1.5rem (prominent in footer)

### **Spacing:**
- **Navigation**: `gap-2` between icons
- **Footer**: `me-2` margin between icons

## 📱 **Mobile Responsiveness:**

- **Touch-friendly**: Large enough for mobile tapping
- **Responsive**: Icons scale properly on all devices
- **Accessible**: Proper contrast and sizing

## 🔍 **Testing Social Media Links:**

1. **Open the website** in your browser
2. **Click each social media icon** in the navigation
3. **Click each social media icon** in the footer
4. **Verify** that each link opens the correct platform
5. **Check** that links open in new tabs

## ⚠️ **Important Notes:**

### **URL Format Requirements:**
- **Instagram**: `https://instagram.com/username`
- **Facebook**: `https://facebook.com/username`
- **YouTube**: `https://youtube.com/@channelname`
- **Threads**: `https://threads.net/@username`
- **X (Twitter)**: `https://x.com/username`
- **LinkedIn**: `https://linkedin.com/company/companyname`

### **Security Best Practices:**
- Always use `target="_blank"` for external links
- Always include `rel="noopener noreferrer"` for security
- Use HTTPS URLs only

## 🚀 **Current Status:**

**Social Media Links**: ✅ **FULLY FUNCTIONAL**
- **All Platforms**: Connected and working
- **Navigation Bar**: Icons link to social media
- **Footer**: Icons link to social media
- **Security**: Proper external link handling
- **Branding**: Consistent with color scheme

**Your social media icons are now fully functional and will direct visitors to your social media profiles!** 📱✨
