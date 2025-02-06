import "./newsletter.css";
export default function NewsLetter() {
  return (
    <section className="news-letter-section">
      <div className="news-letter-content">
        <div className="news-letter-text">
          <h2>Join Our Newsletter</h2>
          <p>We love to surprise our subscribers with occasional gifts.</p>
        </div>
        <div className="news-letter-input">
          <input type="email" placeholder="Your your email" />
          <button>Subscribe</button>
        </div>
      </div>
    </section>
  );
}
