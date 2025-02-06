import TableHeader from "../../components/common/table-header/TableHeader";
import TablePagination from "../../components/ui/table-pagination/TablePagination";
import TableBodyReviews from "../../components/ui/table-raw/TableBodyReviews";
import Table from "../../components/ui/table/Table";

export default function AdminReviews() {
  return (
    <div className="table-dash">
      <TableHeader PageTitle={"Reviews"} />
      <Table PageTitle={"Reviews"}>
        <TableBodyReviews />
        <TableBodyReviews />
        <TableBodyReviews />
        <TableBodyReviews />
        <TableBodyReviews />
        <TableBodyReviews />
        <TableBodyReviews />
        <TableBodyReviews />
      </Table>
      <TablePagination />
    </div>
  );
}
