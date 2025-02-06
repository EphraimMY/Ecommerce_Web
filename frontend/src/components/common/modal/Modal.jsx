import "./modal.css";
export default function Modal({ children, isOpen, onClose }) {
  return (
    isOpen && (
      <section className="modal-section" onClick={onClose}>
        <div className="modal-content" onClick={(e) => e.stopPropagation()}>
          {children}
        </div>
      </section>
    )
  );
}
