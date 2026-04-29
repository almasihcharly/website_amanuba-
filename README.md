# Amanuba Hotel & Resort - Booking Website

A luxurious hotel booking website built with Laravel and Tailwind CSS, featuring modern design and comprehensive booking functionality.

## 🏨 Features

- **Responsive Design**: Mobile-first design that works beautifully on all devices
- **Modern UI**: Clean, elegant interface using Tailwind CSS with custom animations
- **Room Management**: Display different room types with detailed information
- **Booking System**: Complete booking form with validation
- **Facilities Showcase**: Interactive display of hotel amenities
- **Contact & Location**: Contact information with Google Maps integration
- **Gallery**: Visual tour of the hotel with image grid layout

## 🛠️ Technology Stack

- **Backend**: Laravel 11
- **Frontend**: Blade Templates
- **CSS**: Tailwind CSS 4.0
- **JavaScript**: Vanilla JS with modern features
- **Database**: MySQL (migrations included)
- **Build Tool**: Vite

## 📁 Project Structure

```
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php          # Main layout
│   │   ├── components/
│   │   │   ├── navbar.blade.php       # Navigation component
│   │   │   ├── footer.blade.php       # Footer component
│   │   │   └── hero.blade.php         # Hero section component
│   │   └── pages/
│   │       ├── home.blade.php         # Homepage
│   │       ├── rooms.blade.php        # Rooms page
│   │       ├── facilities.blade.php   # Facilities page
│   │       └── contact.blade.php      # Contact & booking page
│   ├── css/
│   │   └── app.css                    # Main stylesheet
│   └── js/
│       └── app.js                     # Main JavaScript file
├── database/
│   └── migrations/
│       ├── create_rooms_table.php     # Rooms table migration
│       └── create_bookings_table.php  # Bookings table migration
└── routes/
    └── web.php                        # Web routes
```

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd booking-amanuba
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   php artisan migrate
   ```

5. **Build assets**
   ```bash
   npm run build
   ```

6. **Start the development server**
   ```bash
   php artisan serve
   ```

7. **Start Vite development server (optional)**
   ```bash
   npm run dev
   ```

## 📱 Pages & Features

### Homepage (`/`)
- Hero section with call-to-action
- About section highlighting hotel features
- Featured rooms showcase
- Photo gallery
- Booking call-to-action

### Rooms Page (`/rooms`)
- Complete room catalog with filters
- Room cards with pricing and amenities
- Detailed room information
- Interactive hover effects

### Facilities Page (`/facilities`)
- Swimming pool, spa, restaurant, gym
- Operating hours for each facility
- Additional services overview
- Interactive facility cards

### Contact & Booking (`/contact`)
- Comprehensive booking form
- Contact information
- Google Maps integration
- Newsletter subscription
- Social media links

## 🎨 Design Features

- **Color Scheme**: Gold/Amber (#d97706) with neutral grays
- **Typography**: Playfair Display (headings) and Poppins (body)
- **Animations**: Smooth transitions and scroll animations
- **Responsive**: Mobile-first approach with breakpoints
- **Accessibility**: Semantic HTML and ARIA labels

## 🔧 Custom Components

### Navbar Component
- Fixed navigation with blur effect on scroll
- Mobile-responsive hamburger menu
- Active page highlighting

### Hero Component
- Full-screen hero section
- Animated text and buttons
- Background image with overlay

### Footer Component
- Multi-column layout
- Newsletter subscription
- Social media integration
- Quick links

## 📊 Database Schema

### Rooms Table
- `id`, `name`, `price`, `description`
- `image`, `facilities` (JSON), `max_guests`
- `available` status

### Bookings Table
- Guest information (name, email, phone)
- Booking dates (check_in, check_out)
- Room reference and pricing
- Booking status tracking

## 🚀 Future Enhancements

- **Admin Panel**: CRUD operations for rooms and bookings
- **Payment Integration**: Stripe/PayPal payment processing
- **User Authentication**: Guest accounts and booking history
- **Email Notifications**: Booking confirmations and reminders
- **Multi-language Support**: Internationalization
- **Advanced Search**: Room availability calendar
- **Reviews System**: Guest ratings and testimonials

## 📝 Development Notes

- Uses Tailwind CSS 4.0 with custom configuration
- Implements modern JavaScript features (ES6+)
- Follows Laravel best practices and conventions
- Optimized for performance with lazy loading
- SEO-friendly with semantic markup

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## 📄 License

This project is open-sourced software licensed under the MIT license.

---

**Built with ❤️ for Amanuba Hotel & Resort**
