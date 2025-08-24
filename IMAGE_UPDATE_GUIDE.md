# Image Update Guide - SV Infra Projects Website

## 📸 How to Update Images

### 1. Required Images

Place the following images in the `assets/images/` directory:

#### Company Logo
- **File**: `logo.png`
- **Size**: 200x50px (recommended)
- **Format**: PNG with transparent background
- **Usage**: Appears in navigation bar

#### Project Images
- **SV Resorts**: `sv-resorts.jpg`
- **SV Enclave**: `sv-enclave.jpg`
- **Size**: 800x600px (recommended)
- **Format**: JPG or WebP
- **Quality**: High resolution for web

#### Team Photos
- **Sridhar Rao**: `sridhar-rao.jpg`
- **Vamshidhar Reddy**: `vamshidhar-reddy.jpg`
- **Size**: 400x400px (square format)
- **Format**: JPG
- **Style**: Professional headshots

### 2. Image Optimization Tips

#### Before Uploading:
1. **Resize images** to recommended dimensions
2. **Compress files** without losing quality
3. **Use WebP format** for better performance
4. **Add descriptive alt text** for accessibility

#### Recommended Tools:
- **Online**: TinyPNG, Squoosh.app
- **Desktop**: Photoshop, GIMP, Affinity Photo
- **Mobile**: Snapseed, Lightroom Mobile

### 3. File Structure
```
assets/
└── images/
    ├── logo.png
    ├── sv-resorts.jpg
    ├── sv-enclave.jpg
    ├── sridhar-rao.jpg
    └── vamshidhar-reddy.jpg
```

## 📄 How to Add Brochures

### 1. Brochure Files

Place PDF brochures in the `brochures/` directory:

#### Required Files:
- **SV Resorts**: `sv-resorts-brochure.pdf`
- **SV Enclave**: `sv-enclave-brochure.pdf`

### 2. Brochure Content Guidelines

#### Essential Information:
- Project overview and highlights
- Location details and connectivity
- Amenities and features list
- Pricing information
- Contact details
- High-quality project images
- Site plans and layouts

#### Design Tips:
- Use consistent branding
- Include company logo
- Professional layout
- Easy to read fonts
- High-resolution images
- Contact information prominently displayed

### 3. File Requirements
- **Format**: PDF (recommended)
- **Size**: Under 10MB each
- **Quality**: Print-ready resolution
- **Language**: English (consider Telugu version)

## 🔧 Step-by-Step Update Process

### Step 1: Prepare Images
1. **Gather all required images**
2. **Resize to recommended dimensions**
3. **Optimize file sizes**
4. **Save with correct filenames**

### Step 2: Upload Images
1. **Navigate to `assets/images/` directory**
2. **Upload all image files**
3. **Verify file names match exactly**
4. **Test image loading on website**

### Step 3: Prepare Brochures
1. **Create professional PDF brochures**
2. **Include all required information**
3. **Optimize file sizes**
4. **Save with correct filenames**

### Step 4: Upload Brochures
1. **Navigate to `brochures/` directory**
2. **Upload PDF files**
3. **Test download functionality**
4. **Verify links work correctly**

### Step 5: Test Everything
1. **Open website in browser**
2. **Check all images display correctly**
3. **Test brochure downloads**
4. **Verify responsive design**
5. **Check loading speeds**

## 🎨 Image Specifications

### Logo
```css
/* Current placeholder styling */
.navbar-brand img {
    height: 50px;
    width: auto;
}
```

### Project Images
```css
/* Current styling */
.project-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 15px;
}
```

### Team Photos
```css
/* Current styling */
.member-image img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid var(--primary-color);
}
```

## 📱 Responsive Image Considerations

### Mobile Optimization:
- Images should look good on small screens
- Maintain aspect ratios
- Ensure text remains readable
- Test on various devices

### Loading Performance:
- Use lazy loading for large images
- Optimize file sizes
- Consider WebP format for modern browsers
- Provide fallback formats

## 🔍 Testing Checklist

### Images:
- [ ] All images load correctly
- [ ] Images display at proper sizes
- [ ] Responsive design works
- [ ] Alt text is descriptive
- [ ] Loading speed is acceptable

### Brochures:
- [ ] PDF files upload successfully
- [ ] Download links work
- [ ] Files open correctly
- [ ] File sizes are reasonable
- [ ] Content is professional

### Overall:
- [ ] Website loads without errors
- [ ] All links function properly
- [ ] Mobile experience is good
- [ ] Performance is satisfactory

## 🆘 Troubleshooting

### Common Issues:

#### Images Not Loading
- Check file paths are correct
- Verify file names match exactly
- Ensure files are in correct directory
- Check file permissions

#### Brochures Not Downloading
- Verify PDF files exist
- Check file permissions
- Test direct file access
- Ensure correct file extensions

#### Poor Performance
- Optimize image file sizes
- Use appropriate image formats
- Enable compression on server
- Consider CDN for images

## 📞 Support

If you encounter any issues:
1. Check this guide first
2. Verify file names and paths
3. Test on different browsers
4. Contact development team if needed

---

**Remember**: Always backup your current files before making changes!
