CREATE UNIQUE INDEX IF NOT EXISTS event_store_stream_identifier ON event_store_stream (id, identifier_class);
CREATE UNIQUE INDEX IF NOT EXISTS event_store_stream_events_playhead ON event_store_stream_events (stream_id, playhead) WHERE canceled_at IS NULL;
CREATE INDEX IF NOT EXISTS event_store_stream_events_stream ON event_store_stream_events (id, stream_id);

