# CreativeZone Theme - Custom Bootstrap SCSS Setup

This WordPress theme now uses a custom SCSS workflow to customize Bootstrap instead of using the direct Bootstrap CSS file. The theme has been optimized by removing unused CSS and JavaScript libraries and includes modern, responsive header, footer, and 404 page designs.

## File Structure

```
scss/
├── main.scss              # Main SCSS file that imports Bootstrap and custom styles
├── bootstrap.scss         # Original Bootstrap customization (kept for reference)
└── theme/
    ├── _variables.scss    # Additional custom variables
    ├── _mixins.scss       # Custom SCSS mixins
    ├── _utilities.scss    # Custom utility classes
    ├── _components.scss   # Custom component styles
    └── _layout.scss       # Custom layout styles (header, footer, 404)

lib/
└── typed/                 # Typed.js library (used in 404.php)

js/
├── bootstrap.min.js       # Bootstrap JavaScript
├── main.js               # Enhanced custom JavaScript
└── customizer.js         # WordPress customizer JavaScript
```

## Setup Instructions

1. **Install Dependencies**
   ```bash
   npm install
   ```

2. **Compile SCSS to CSS**
   ```bash
   # For development (with source maps and expanded style)
   npm run dev
   
   # For production (compressed)
   npm run build
   
   # Watch for changes during development
   npm run watch
   ```

3. **Clean compiled files**
   ```bash
   npm run clean
   ```

## Removed Unused Files

The following unused CSS and JavaScript libraries have been removed to optimize the theme:

### Removed CSS Libraries:
- `css/bootstrap.min.css` (replaced by custom SCSS)
- `css/style.css` (included in custom SCSS)
- Font Awesome CSS
- Bootstrap Icons CSS (local)
- Animate.css
- Lightbox CSS
- Owl Carousel CSS

### Removed JavaScript Libraries:
- WOW.js (animation library)
- Easing.js (animation easing)
- Waypoints.js (scroll triggers)
- CounterUp.js (number counters)
- Isotope.js (filtering/sorting)
- Lightbox.js (image lightbox)
- Owl Carousel.js (carousel/slider)

### Kept Libraries:
- **Typed.js** - Used in 404.php for typing animation
- **Bootstrap JS** - Core Bootstrap functionality
- **jQuery** - WordPress dependency
- **Bootstrap Icons CDN** - For modern icons

## New Features & Improvements

### 🎨 **Modern Header Design**
- **Fixed positioning** with smooth scroll effects
- **Backdrop blur** for modern glass effect
- **Responsive navigation** with mobile-first approach
- **Search modal** with enhanced functionality
- **Smooth transitions** and hover effects
- **Active state indicators** for current page

### 🦶 **Enhanced Footer Design**
- **Multi-column layout** with company info, quick links, services, and contact
- **Social media links** with hover animations
- **Contact information** with icons
- **Responsive design** that stacks on mobile
- **Modern styling** with proper spacing and typography
- **Back to top button** with smooth scroll

### 🚨 **Attractive 404 Page**
- **Large animated 404 number** with gradient line
- **Typed.js animation** showing suggested services
- **Multiple action buttons** (Home, Contact, Go Back)
- **Search functionality** to help users find content
- **Popular pages links** for easy navigation
- **Decorative floating elements** with CSS animations
- **Fully responsive** design

### ⚡ **Enhanced JavaScript Features**
- **Header scroll effects** with background changes
- **Back to top functionality** with smooth scroll
- **Mobile menu improvements** with auto-close
- **Form validation** and loading states
- **Lazy loading** for images
- **Scroll reveal animations**
- **Button loading states**
- **Card hover effects**

## Customization

### Colors and Variables
Edit `scss/main.scss` to customize Bootstrap variables:
```scss
$primary: #6244C5;
$secondary: #FFC448;
$light: #FAFAFB;
$dark: #12141D;
```

### Custom Components
Add custom component styles in `scss/theme/_components.scss`:
```scss
.btn-custom {
  @include button-variant($primary, $primary);
  border-radius: $border-radius;
  font-weight: 600;
  padding: 0.75rem 2rem;
}
```

### Custom Utilities
Add custom utility classes in `scss/theme/_utilities.scss`:
```scss
.bg-gradient-primary {
  @include gradient($primary, darken($primary, 10%));
}
```

### Layout Styles
Add custom layout styles in `scss/theme/_layout.scss`:
```scss
.hero-section {
  background: linear-gradient(135deg, $primary 0%, darken($primary, 15%) 100%);
  color: white;
  padding: 6rem 0;
}
```

## Available Custom Classes

### Buttons
- `.btn-custom` - Custom primary button
- `.btn-outline-custom` - Custom outline button

### Cards
- `.card-custom` - Custom card with hover effects

### Utilities
- `.bg-gradient-primary` - Primary gradient background
- `.bg-gradient-secondary` - Secondary gradient background
- `.text-gradient-primary` - Primary gradient text
- `.text-gradient-secondary` - Secondary gradient text
- `.shadow-custom` - Custom shadow
- `.shadow-custom-lg` - Large custom shadow
- `.hover-lift` - Hover lift effect
- `.hover-scale` - Hover scale effect

### Layout
- `.hero-section` - Hero section styling
- `.section` - Section styling
- `.site-header` - Header styling
- `.site-footer` - Footer styling
- `.error-404-page` - 404 page styling

## Performance Improvements

By removing unused libraries and optimizing the design, the theme now:
- **Loads faster** with fewer HTTP requests
- **Has a smaller file size** by removing ~300KB+ of unused code
- **Improves page load times** with optimized assets
- **Reduces memory usage** with cleaner code
- **Minimizes potential conflicts** between libraries
- **Provides better user experience** with modern interactions

## Responsive Design

The theme is fully responsive with:
- **Mobile-first approach** for all components
- **Flexible navigation** that adapts to screen size
- **Optimized typography** that scales properly
- **Touch-friendly interactions** for mobile devices
- **Proper spacing** that works on all devices

## Browser Support

The theme supports:
- **Modern browsers** (Chrome, Firefox, Safari, Edge)
- **Mobile browsers** (iOS Safari, Chrome Mobile)
- **Progressive enhancement** for older browsers

## Notes

- The compiled CSS file will be `css/bootstrap-custom.css`
- The theme now loads `bootstrap-custom.css` instead of the direct Bootstrap CSS
- All custom styles are now included in the compiled CSS file
- Source maps are generated for easier debugging during development
- Only essential libraries are loaded, improving performance
- Bootstrap Icons are loaded from CDN for better performance
- The theme includes modern CSS features like backdrop-filter and CSS Grid 