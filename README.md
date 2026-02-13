
testing for data mining project 
# BikeHub: Web-Based Marketplace with Data Mining Analytics-test

A comprehensive bicycle marketplace platform with advanced data mining, analytics, and recommendation systems.

## 🎯 Project Overview

BikeHub is a full-featured e-commerce platform designed specifically for bicycle shops and customers. It combines marketplace functionality with sophisticated data mining techniques to provide:

- **Smart Recommendations**: AI-powered product suggestions using collaborative and content-based filtering
- **Predictive Analytics**: Demand forecasting and inventory optimization
- **Business Intelligence**: Comprehensive sales, customer, and product analytics
- **Data Mining**: Market basket analysis, customer segmentation, and churn prediction

## 📋 Features

### Marketplace Features
- Product browsing and search with filters
- Shopping cart and checkout process
- Order management and tracking
- Multi-shop support
- Cross-border tax calculation
- Payment processing integration
- Review and rating system

### Analytics & Data Mining

#### 1. **Recommendation Engine**
- **Collaborative Filtering**: User-based recommendations
- **Content-Based Filtering**: Similar product suggestions
- **Hybrid Approach**: Combined recommendation strategies
- **Trending Products**: Real-time popularity tracking

#### 2. **Predictive Analytics**
- **Demand Forecasting**: ML-based product demand prediction
- **Inventory Optimization**: Automated restock recommendations
- **Seasonality Analysis**: Pattern detection in sales data
- **Customer Lifetime Value**: CLV prediction

#### 3. **Sales Analytics**
- Revenue trends and KPIs
- Product performance metrics
- Category analysis
- Customer segmentation (RFM analysis)
- Payment and delivery analytics

#### 4. **Data Mining**
- **Market Basket Analysis**: Product association rules using Apriori algorithm
- **Customer Segmentation**: K-means clustering based on RFM
- **Churn Prediction**: At-risk customer identification
- **Price Sensitivity Analysis**: Optimal pricing recommendations
- **Product Bundling**: Data-driven bundle suggestions

## 🛠️ Technology Stack

### Backend
- **Python 3.8+**
- **Flask**: Web framework
- **SQLAlchemy**: ORM
- **MySQL**: Database

### Data Mining & Analytics
- **pandas**: Data manipulation
- **numpy**: Numerical computations
- **scikit-learn**: Machine learning
  - K-means clustering
  - Random Forest
  - Cosine similarity
- **mlxtend**: Market basket analysis (Apriori)
- **scipy**: Scientific computing

### Visualization
- **matplotlib**: Static plots
- **seaborn**: Statistical visualizations
- **plotly**: Interactive charts

## 📁 Project Structure

```
bikehub/
├── backend/
│   └── app.py                 # Main Flask application
├── analytics/
│   ├── recommendation_engine.py   # Recommendation algorithms
│   ├── predictive_analytics.py    # Forecasting models
│   ├── sales_analytics.py         # Business intelligence
│   └── data_mining.py             # Data mining algorithms
├── models/
│   ├── user.py               # User model
│   ├── shop.py               # Shop model
│   ├── product.py            # Product model
│   └── order.py              # Order model
├── database/
│   └── schema.sql            # Database schema
├── utils/
│   ├── tax_calculator.py     # Tax calculation utilities
│   └── distance_calculator.py # Delivery estimation
└── requirements.txt          # Python dependencies
```

## 🚀 Installation

### Prerequisites
- Python 3.8 or higher
- MySQL 8.0+
- pip package manager

### Setup Steps

1. **Clone the repository**
```bash
git clone <repository-url>
cd bikehub
```

2. **Create virtual environment**
```bash
python -m venv venv
source venv/bin/activate  # On Windows: venv\Scripts\activate
```

3. **Install dependencies**
```bash
pip install -r requirements.txt
```

4. **Setup database**
```bash
mysql -u root -p < database/schema.sql
```

5. **Configure environment**
```bash
cp .env.example .env
# Edit .env with your settings:
# - DATABASE_URL
# - SECRET_KEY
# - MAIL_SERVER credentials
```

6. **Run the application**
```bash
cd backend
python app.py
```

The API will be available at `http://localhost:5000`

## 📊 Data Mining Algorithms

### 1. Collaborative Filtering
Uses user-item interaction matrix and cosine similarity to find similar users and recommend products they liked.

**Algorithm**: User-based CF
- Build user-item matrix from interactions (views, purchases, reviews)
- Calculate user similarities using cosine similarity
- Predict ratings based on similar users' preferences

### 2. Content-Based Filtering
Uses TF-IDF vectorization on product features to find similar products.

**Features used**:
- Product name and description
- Brand and category
- Price range
- Ratings

### 3. Market Basket Analysis
Implements Apriori algorithm to discover product associations.

**Metrics**:
- **Support**: Frequency of itemset
- **Confidence**: Likelihood of consequent given antecedent
- **Lift**: Strength of association (>1 indicates positive correlation)

### 4. Customer Segmentation
K-means clustering based on RFM (Recency, Frequency, Monetary) analysis.

**Segments identified**:
- VIP Customers: High frequency, high monetary value
- Loyal Customers: Recent, frequent purchases
- At-Risk Customers: Long time since last purchase
- Potential Customers: Others

### 5. Demand Forecasting
Random Forest Regressor with time series features:
- Temporal features (month, day of week, etc.)
- Lag features (previous sales)
- Rolling statistics (moving averages)

## 🔌 API Endpoints

### Authentication
```
POST /api/register      - Register new user
POST /api/login         - User login
POST /api/logout        - User logout
```

### Products
```
GET  /api/products                    - List products with filters
GET  /api/products/<product_id>       - Get product details
```

### Recommendations
```
GET  /api/recommendations/<user_id>           - Personalized recommendations
GET  /api/recommendations/similar/<product_id> - Similar products
GET  /api/recommendations/trending            - Trending products
```

### Analytics
```
GET  /api/analytics/sales/<shop_id>      - Sales overview
GET  /api/analytics/products/<shop_id>   - Product performance
GET  /api/analytics/inventory/<shop_id>  - Inventory status
GET  /api/analytics/forecast/<shop_id>   - Demand forecast
```

### Dashboard
```
GET  /api/dashboard/shop/<shop_id>  - Comprehensive shop dashboard
```

## 📈 Analytics Examples

### Get Sales Analytics
```python
GET /api/analytics/sales/123?period=month

Response:
{
  "period": "month",
  "total_revenue": 125430.50,
  "total_orders": 342,
  "avg_order_value": 366.72,
  "revenue_change_percent": 15.3,
  "order_status_breakdown": {
    "Delivered": 280,
    "Shipped": 45,
    "Processing": 17
  }
}
```

### Get Product Recommendations
```python
GET /api/recommendations/456?n=5

Response:
{
  "user_id": 456,
  "recommendations": [
    {
      "product_id": 101,
      "product_name": "Mountain Bike Pro X1",
      "brand": "Trek",
      "price": 1299.99,
      "rating": 4.7,
      "recommendation_score": 8.5
    },
    ...
  ]
}
```

### Get Demand Forecast
```python
GET /api/analytics/forecast/123?product_id=101&days=30

Response:
{
  "product_id": 101,
  "forecast": [
    {
      "date": "2026-02-14",
      "predicted_quantity": 5.2
    },
    ...
  ],
  "model_accuracy": {
    "mape": 12.3
  }
}
```

## 🎓 Data Mining Use Cases

### Market Basket Analysis
Discover that customers who buy mountain bikes often also buy:
- Bike helmets (lift: 3.2)
- Water bottles (lift: 2.8)
- Repair kits (lift: 2.5)

**Business Value**: Create product bundles, optimize product placement

### Customer Segmentation
Identify customer groups:
- VIP: 120 customers, avg spend $5,200/year
- At-Risk: 85 customers who haven't purchased in 90+ days

**Business Value**: Targeted marketing campaigns, retention strategies

### Demand Forecasting
Predict next month's demand for popular products with 88% accuracy.

**Business Value**: Optimize inventory, reduce stockouts, minimize overstock

## 🔒 Security Features

- Password hashing with bcrypt
- JWT-based authentication
- SQL injection prevention (SQLAlchemy ORM)
- CORS configuration
- Input validation

## 🧪 Testing

```bash
# Run unit tests
python -m pytest tests/

# Run specific test
python -m pytest tests/test_recommendations.py
```

## 📝 Configuration

### Environment Variables
```
DATABASE_URL=mysql+pymysql://user:pass@localhost/bikehub
SECRET_KEY=your-secret-key-here
MAIL_SERVER=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
```

### Database Configuration
Update `schema.sql` to customize:
- Tax rates for different countries
- Product categories
- Initial data

## 🚧 Future Enhancements

- [ ] Real-time GPS tracking integration
- [ ] Mobile app (React Native)
- [ ] Advanced image search
- [ ] Chatbot support
- [ ] Social media integration
- [ ] A/B testing framework
- [ ] Real-time analytics dashboard
- [ ] Deep learning recommendations

## 👥 Contributing

1. Fork the repository
2. Create feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Open Pull Request

## 📄 License

This project is licensed under the MIT License.

## 👨‍💻 Authors

- Ivan Fernandez
- Mark Daniel Castillo
- Dave Hoyohoy
- Jenises Mariquit

## 📞 Support

For issues and questions:
- Create an issue on GitHub
- Email: support@bikehub.com

## 🙏 Acknowledgments

- Flask community
- scikit-learn contributors
- All open-source libraries used

---

**Note**: This is a prototype system. For production deployment, additional security hardening, performance optimization, and testing are recommended.