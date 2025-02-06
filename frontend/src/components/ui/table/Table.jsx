import TrHeadReviews from "../table-raw/TrHeadReviews";
import TrHeadOrders from "../table-raw/TrHeadOrders";
import "./style.table.css";
import TrHeadCustomers from "../table-raw/TrHeadCustomers";
import TrHeadProducts from "../table-raw/TrHeadProducts";
export default function Table({ PageTitle, children }) {
  return (
    <>
      <table className="table">
        <thead>{getTrHead(PageTitle)}</thead>
        <tbody>{children}</tbody>
      </table>
    </>
  );
}

function getTrHead(pageTitle) {
  switch (pageTitle) {
    case "Orders":
      return <TrHeadOrders />;
    case "Reviews":
      return <TrHeadReviews />;
    case "Customers":
      return <TrHeadCustomers />;
    case "Products":
      return <TrHeadProducts />;
    default:
      return <TrHeadOrders />;
  }
}
